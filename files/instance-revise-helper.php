<?php

declare(strict_types=1);

require_once IPS_GetScriptFile(GetLocalConfig('GLOBAL_HELPER'));

function Instance_cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    $a_pos = $a['position'];
    $b_pos = $b['position'];
    if ($a_pos != $b_pos) {
        return $a_pos - $b_pos;
    }
    $a_ident = $a['ident'];
    $b_ident = $b['ident'];
    return strcmp($a_ident, $b_ident);
}

function Instance_ExtractNormalize(string $type, int $instID, bool $write2file)
{
    $ArchivID = GetLocalConfig('Archive Control');

    $items = [];

    $obj = IPS_GetObject($instID);
    $name = $obj['ObjectName'];

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
        $item['ident'] = $ident;
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
            $item['customAction'] = $action;
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
        $items[] = $item;
    }
    usort($items, 'Instance_cmp');

    $settings = [];
    foreach ($items as $item) {
        $ident = $item['ident'];
        $i = [];
        foreach ($item as $key => $val) {
            if ($key != 'ident') {
                $i[$key] = $val;
            }
        }
        $settings[$ident] = $i;
    }

    $s = '<?php' . PHP_EOL;
    $s .= PHP_EOL;
    $s .= 'declare(strict_types=1);' . PHP_EOL;
    $s .= PHP_EOL;
    $s .= '$setting = ' . var_export($settings, true) . ';' . PHP_EOL;
    $s .= PHP_EOL;
    $s .= 'echo json_encode($setting);' . PHP_EOL;

    if ($write2file) {
        $parID = GetLocalConfig('INSTANCE_REVISE_HELPER');
        $scriptID = @IPS_GetScriptIDByName($type, $parID);
        if ($scriptID == false) {
            echo 'Skript "' . $type . '" wird angelegt' . PHP_EOL;
            $scriptID = IPS_CreateScript(SCRIPTTYPE_PHP);
            IPS_SetName($scriptID, $type);
            IPS_SetParent($scriptID, $parID);
        } else {
            echo 'Skript "' . $type . '" wird aktualisiert' . PHP_EOL;
        }
        IPS_SetScriptContent($scriptID, $s);
    } else {
        echo $s;
    }
}

function Instance_Normalize(int $instID, string $type)
{
    $ArchivID = GetLocalConfig('Archive Control');

    $setting = false;
    $parID = GetLocalConfig('INSTANCE_REVISE_HELPER');
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

    echo 'Instanz mit ' . $instID . '(' . IPS_GetLocation($instID) . ') wird als "' . $type . '" konfiguriert' . PHP_EOL;

    $obj = IPS_GetObject($instID);
    $chldIDs = $obj['ChildrenIDs'];
    foreach ($chldIDs as $chldID) {
        $obj = IPS_GetObject($chldID);
        if ($obj['ObjectType'] != OBJECTTYPE_VARIABLE) {
            continue;
        }
        $ident = $obj['ObjectIdent'];
        if ($ident == '' || !isset($setting[$ident])) {
            continue;
        }
        if (!isset($setting[$ident])) {
            continue;
        }
        $item = $setting[$ident];
        $var = IPS_GetVariable($chldID);
        if (isset($item['name'])) {
            IPS_SetName($chldID, $item['name']);
        } else {
            IPS_SetName($chldID, $ident);
        }
        // IPS_SetInfo($instID, $type);
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
}

function Instance_NormalizeByModuleID(string $moduleID, string $type)
{
    $instIDs = IPS_GetInstanceListByModuleID($moduleID);
    foreach ($instIDs as $instID) {
        Instance_Normalize($instID, $type);
    }
}
