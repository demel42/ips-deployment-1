<?php

declare(strict_types=1);

require_once IPS_GetScriptFile(GetLocalConfig('GLOBAL_HELPER'));

function HM_cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    $a_pos = isset($a['position']) ? $a['position'] : 0;
    $b_pos = isset($b['position']) ? $b['position'] : 0;
    if ($a_pos != $b_pos) {
        return $a_pos - $b_pos;
    }
    $a_ident = $a['ident'];
    $b_ident = $b['ident'];
    return strcmp($a_ident, $b_ident);
}

function HM_ExtractNormalize(string $type, string $address, bool $write2file)
{
    $ArchivID = GetArchivControl();

    $setting = [];
    $setting['name'] = '';
    $mainName = '';
    $instIDs = IPS_GetInstanceListByModuleID('{EE4A81C6-5C90-4DB7-AD2F-F6BBD521412E}'); // HomeMatic
    foreach ($instIDs as $instID) {
        $addr = IPS_GetProperty($instID, 'Address');
        $sub = preg_replace('/^[^:]*:/', '', $addr);
        $addr = preg_replace('/:[0-9]*$/', '', $addr);
        if ($addr != $address) {
            continue;
        }
        $items = [];
        $obj = IPS_GetObject($instID);
        $name = $obj['ObjectName'];
        if (!preg_match('/ \(:[0-9]+\)$/', $name)) {
            $mainName = $name;
            $items['isMain'] = true;
        }
        $chldIDs = $obj['ChildrenIDs'];
        foreach ($chldIDs as $chldID) {
            $obj = IPS_GetObject($chldID);
            if ($obj['ObjectType'] != OBJECTTYPE_VARIABLE) {
                continue;
            }
            $var = IPS_GetVariable($chldID);
            $ident = $obj['ObjectIdent'];
            if ($ident == '') {
                continue;
            }
            $item = [];
            if ($obj['ObjectName'] != $ident) {
                $item['name'] = $obj['ObjectName'];
            }
            $item['position'] = $obj['ObjectPosition'];
            $item['icon'] = $obj['ObjectIcon'];
            if ($obj['ObjectIsHidden'] == true) {
                $item['isHidden'] = true;
            }
            if ($obj['ObjectIsDisabled'] == true) {
                $item['isDisabled'] = true;
            }
            if ($var['VariableCustomProfile'] != '') {
                $item['customProfile'] = $var['VariableCustomProfile'];
            }
            $action = $var['VariableCustomAction'];
            if ($action == 1 && $var['VariableAction'] > 0) {
                $item['disableAction'] = true;
            } elseif ($action > 1) {
                $item['customAction'] = IPS_GetName($action);
            }
            if (AC_GetLoggingStatus($ArchivID, $chldID)) {
                $item['doArchive'] = true;
                $n = AC_GetAggregationType($ArchivID, $chldID);
                if ($n == 1 /* Zähler */) {
                    $item['aggregationType'] = $n;
                    if (AC_GetCounterIgnoreZeros($ArchivID, $chldID)) {
                        $item['ignoreZeros'] = true;
                    }
                }
            }
            if ($item != []) {
                $items[$ident] = $item;
            }
        }
        ksort($items);
        $setting[$sub] = $items;
    }
    $setting['name'] = $mainName;
    ksort($setting);

    $s = '<?php' . PHP_EOL;
    $s .= PHP_EOL;
    $s .= 'declare(strict_types=1);' . PHP_EOL;
    $s .= PHP_EOL;
    $s .= '$setting = ' . var_export($setting, true) . ';' . PHP_EOL;
    $s .= PHP_EOL;
    $s .= 'echo json_encode($setting);' . PHP_EOL;

    if ($write2file) {
        $parID = GetLocalConfig('HM_INSTANCE_REVISE_HELPER');
        $scriptID = @IPS_GetScriptIDByName($ident, $parID);
        if ($scriptID == false) {
            echo 'Skript "' . $ident . '" wird angelegt' . PHP_EOL;
            $scriptID = IPS_CreateScript(SCRIPTTYPE_PHP);
            IPS_SetName($scriptID, $ident);
            IPS_SetParent($scriptID, $parID);
        } else {
            echo 'Skript "' . $ident . '" wird aktualisiert' . PHP_EOL;
        }
        IPS_SetScriptContent($scriptID, $s);
    } else {
        echo $s;
    }
}

function HM_Normalize(string $type, string $address, string $name = '', array $names = [])
{
    $ArchivID = GetArchivControl();
    $lnkIDs = IPS_GetLinkList();

    $setting = false;
    $parID = GetLocalConfig('HM_INSTANCE_REVISE_HELPER');
    $scriptID = @IPS_GetObjectIDByName($type, $parID);
    if (IPS_ScriptExists($scriptID)) {
        $ret = @IPS_RunScriptWait($scriptID);
        if ($ret != false) {
            $setting = json_decode($ret, true);
        }
    }

    if ($setting == false) {
        echo 'unbekannter Typ "' . $type . '"' . PHP_EOL;
        return;
    }

    if ($name == '') {
        $name = $setting['name'];
    }

    $instIDs = IPS_GetInstanceListByModuleID('{EE4A81C6-5C90-4DB7-AD2F-F6BBD521412E}'); // HomeMatic
    foreach ($instIDs as $instID) {
        $addr = IPS_GetProperty($instID, 'Address');
        $sub = preg_replace('/^[^:]*:/', '', $addr);
        $addr = preg_replace('/:[0-9]*$/', '', $addr);
        if ($addr != $address) {
            continue;
        }
        if (isset($setting[$sub])) {
            $items = $setting[$sub];
            if (isset($items['isOptional']) && $items['isOptional'] == true && isset($names[$sub]) == false) {
                $items = [];
            }
        } else {
            $items = [];
        }
        if ($items != []) {
            echo 'Instanz ' . $instID . '(' . IPS_GetLocation($instID) . ') mit Adresse ' . $addr . ':' . $sub . ' wird als "' . $type . '" konfiguriert' . PHP_EOL;
            $s = $name;
            if (isset($names[$sub])) {
                $s = $names[$sub];
            } elseif (isset($items['name'])) {
                $s = $items['name'];
            }
            if (!(isset($items['isMain']) && $items['isMain'] == true)) {
                $s .= ' (:' . $sub . ')';
            }
            IPS_SetName($instID, $s);
            IPS_SetInfo($instID, $type);
            foreach ($items as $ident => $item) {
                if (@IPS_GetObjectIDByIdent($ident, $instID)) {
                    continue;
                }
                if (isset($item['create']) && $item['create']) {
                    $chldID = IPS_CreateVariable($item['variablenTyp']);
                    IPS_SetParent($chldID, $instID);
                    IPS_SetIdent($chldID, $ident);
                }
            }
            $chldIDs = IPS_GetChildrenIDs($instID);
            foreach ($chldIDs as $chldID) {
                $obj = IPS_GetObject($chldID);
                if ($obj['ObjectType'] != OBJECTTYPE_VARIABLE) {
                    continue;
                }
                $ident = $obj['ObjectIdent'];
                if ($ident == '' || !isset($items[$ident])) {
                    continue;
                }
                $item = $items[$ident];
                $var = IPS_GetVariable($chldID);
                if (isset($item['name'])) {
                    IPS_SetName($chldID, $item['name']);
                } else {
                    IPS_SetName($chldID, $ident);
                }
                $position = isset($item['position']) ? $item['position'] : 0;
                IPS_SetPosition($chldID, $position);
                $icon = isset($item['icon']) ? $item['icon'] : '';
                IPS_SetIcon($chldID, $icon);
                $hidden = isset($item['isHidden']) ? $item['isHidden'] : false;
                IPS_SetHidden($chldID, $hidden);
                $disabled = isset($item['isDisabled']) ? $item['isDisabled'] : false;
                IPS_SetDisabled($chldID, $disabled);
                if (isset($item['customProfile'])) {
                    IPS_SetVariableCustomProfile($chldID, $item['customProfile']);
                } else {
                    IPS_SetVariableCustomProfile($chldID, '');
                }
                if (isset($item['disableAction']) && $item['disableAction']) {
                    IPS_SetVariableCustomAction($chldID, 1);
                } elseif (isset($item['customAction'])) {
                    $action = $item['customAction'];
                    if (is_numeric($action) == false) {
                        $action = @IPS_GetObjectIDByName($action, GetLocalConfig('Aktions-Scripte'));
                        if ($action == false) {
                            echo 'unknown customAction "' . $item['customAction'] . '"' . PHP_EOL;
                            $action = 0;
                        }
                    }
                    IPS_SetVariableCustomAction($chldID, $action);
                } else {
                    IPS_SetVariableCustomAction($chldID, 0);
                }
                if (isset($item['doArchive']) && $item['doArchive']) {
                    AC_SetLoggingStatus($ArchivID, $chldID, true);
                    if (isset($item['aggregationType'])) {
                        $n = intval($item['aggregationType']);
                        AC_SetAggregationType($ArchivID, $chldID, $n);
                        if ($n == 1 /* Zähler */ && isset($item['ignoreZeros']) && $item['ignoreZeros']) {
                            AC_SetCounterIgnoreZeros($ArchivID, $chldID, true);
                        }
                    }
                } else {
                    AC_SetLoggingStatus($ArchivID, $chldID, false);
                }
            }
        } else {
            $ucID = GetUtilControl();
            /*
                $isReferenced = false;
                $refs = UC_FindReferences($ucID, $instID);
                echo print_r($refs, true).PHP_EOL;
             */
            echo 'Instanz mit ' . $instID . ' und Adresse ' . $addr . ':' . $sub . ' wird gelöscht' . PHP_EOL;
            $hasChilds = false;
            $obj = IPS_GetObject($instID);
            $chldIDs = $obj['ChildrenIDs'];
            foreach ($chldIDs as $chldID) {
                $obj = IPS_GetObject($chldID);
                if ($obj['ObjectType'] != OBJECTTYPE_VARIABLE) {
                    $hasChilds = true;
                    continue;
                }
                $isLinked = false;
                foreach ($lnkIDs as $lnkID) {
                    $lnk = IPS_GetLink($lnkID);
                    if ($lnk['TargetID'] == $chldID) {
                        echo 'link chldID=' . $chldID . '(' . IPS_GetLocation($chldID) . ') => ' . IPS_GetLocation($lnkID) . PHP_EOL;
                        $isLinked = true;
                        $hasChilds = true;
                        break;
                    }
                }
                if ($isLinked == false) {
                    IPS_DeleteVariable($chldID);
                }
            }
            if ($hasChilds == false) {
                IPS_DeleteInstance($instID);
            } else {
                echo 'unable to delete instID=' . $instID . '(' . IPS_GetLocation($instID) . ')' . PHP_EOL;
            }
        }
    }
}

function HM_Normalize4Type(string $type)
{
    $addrV = [];

    $catID = IPS_GetObjectIDByName($type, GetLocalConfig('Geräte-Typen'));
    $objIDs = IPS_GetChildrenIDs($catID);
    foreach ($objIDs as $objID) {
        $lnk = IPS_GetLink($objID);
        $objID = $lnk['TargetID'];
        $addr = IPS_GetProperty($objID, 'Address');
        $addr = preg_replace('/:[0-9]*$/', '', $addr);
        if (!in_array($addr, $addrV)) {
            $addrV[] = $addr;
        }
    }

    foreach ($addrV as $addr) {
        HM_Normalize($type, $addr);
    }
}

function HM_Show4Type(string $type)
{
    $addrV = [];
    $addr2nameV = [];

    $catID = IPS_GetObjectIDByName($type, GetLocalConfig('Geräte-Typen'));
    if ($catID == false) {
        echo 'Objekt mit Typ "' . $type . '" nicht in "Geräte-Typen" gefunden' . PHP_EOL;
        return;
    }
    $objIDs = IPS_GetChildrenIDs($catID);
    foreach ($objIDs as $objID) {
        $lnk = IPS_GetLink($objID);
        $objID = $lnk['TargetID'];
        $addr = IPS_GetProperty($objID, 'Address');
        $addr = preg_replace('/:[0-9]*$/', '', $addr);
        if (!in_array($addr, $addrV)) {
            $addrV[] = $addr;
        }
        $name = IPS_GetName($objID);
        $s = '/ \(:[0-9]+\)/';
        if (!preg_match($s, $name)) {
            $addr2name[$addr] = $name . ' (' . IPS_GetLocation($objID) . ')';
        }
    }

    foreach ($addrV as $addr) {
        $name = isset($addr2name[$addr]) ? $addr2name[$addr] : '';
        echo 'addr=' . $addr . ', name=' . $name . PHP_EOL;
    }
}
