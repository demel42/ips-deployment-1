<?php

declare(strict_types=1);

require_once IPS_GetScriptFile(GetLocalConfig('GLOBAL_HELPER'));

function VariableProfile_Extract(string $ident, bool $write2file)
{
    if (IPS_VariableProfileExists($ident)) {
        $vp = IPS_GetVariableProfile($ident);
        $s = var_export($vp, true);
        $lines = explode(PHP_EOL, $s);
        foreach ($lines as $index => $line) {
            $lines[$index] = preg_replace_callback_array(
                [
                    "/('ProfileType' => )([0-4])(,)/" => function ($m)
                    {
                        $r = ['VARIABLETYPE_BOOLEAN', 'VARIABLETYPE_INTEGER', 'VARIABLETYPE_FLOAT', 'VARIABLETYPE_STRING'];
                        return $m[1] . $r[(int) $m[2]] . $m[3];
                    },
                    "/('Color' => )(\d+)(,)/" => function ($m)
                    {
                        return $m[1] . sprintf('0x%06X', (int) $m[2]) . $m[3];
                    },
                ],
                $line
            );
        }

        $s = '<?php' . PHP_EOL;
        $s .= PHP_EOL;
        $s .= 'declare(strict_types=1);' . PHP_EOL;
        $s .= PHP_EOL;
        $s .= '$setting = ' . implode(PHP_EOL, $lines) . ';' . PHP_EOL;
        $s .= PHP_EOL;
        $s .= 'echo json_encode($setting);' . PHP_EOL;

        if ($write2file) {
            GetLocalConfig('VARIABLEPROFILE_HELPER');
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
}

function VariableProfile_Create(string $ident, bool $overwrite)
{
    $setting = false;
    $parID = GetLocalConfig('VARIABLEPROFILE_HELPER');
    $scriptID = @IPS_GetObjectIDByName($ident, $parID);
    if (IPS_ScriptExists($scriptID)) {
        $ret = @IPS_RunScriptWait($scriptID);
        if ($ret != false) {
            $setting = json_decode($ret, true);
        }
    }

    if ($setting == false) {
        echo 'unbekanntes Variablenprofil "' . $ident . '"' . PHP_EOL;
        return false;
    }

    $ident = $setting['ProfileName'];
    if (IPS_VariableProfileExists($ident)) {
        if ($overwrite == false) {
            echo 'Variablenprofil "' . $ident . '" existiert bereits und wird nicht überschrieben' . PHP_EOL;
            return false;
        }
        echo 'Variablenprofil "' . $ident . '" wird überschrieben' . PHP_EOL;
        IPS_DeleteVariableProfile($ident);
    } else {
        echo 'Variablenprofil "' . $ident . '" wird angelegt' . PHP_EOL;
    }

    IPS_CreateVariableProfile($ident, $setting['ProfileType']);
    IPS_SetVariableProfileIcon($ident, $setting['Icon']);
    IPS_SetVariableProfileText($ident, $setting['Prefix'], $setting['Suffix']);
    if (in_array($setting['ProfileType'], [VARIABLETYPE_INTEGER, VARIABLETYPE_FLOAT])) {
        IPS_SetVariableProfileValues($ident, $setting['MinValue'], $setting['MaxValue'], $setting['StepSize']);
        IPS_SetVariableProfileDigits($ident, $setting['Digits']);
    }
    foreach ($setting['Associations'] as $a) {
        IPS_SetVariableProfileAssociation($ident, $a['Value'], $a['Name'], $a['Icon'], $a['Color']);
    }

    return true;
}

function VariableProfile_Extend(string $ident, array $association)
{
    if (IPS_VariableProfileExists($ident) == false) {
        echo 'unbekanntes Variablenprofil "' . $ident . '"' . PHP_EOL;
        return false;
    }
    $vp = IPS_GetVariableProfile($ident);
    if ($vp['ProfileType'] != VARIABLETYPE_STRING) {
        echo 'Variablenprofil ist nicht vom typ "STRING"' . PHP_EOL;
        return false;
    }
    if (isset($association['value']) == false) {
        echo '"value" fehlt' . PHP_EOL;
        return false;
    }

    $value = $association['value'];
    $name = isset($association['name']) ? $association['name'] : $value;
    $icon = isset($association['icon']) ? $association['icon'] : '';
    $color = isset($association['color']) ? $association['color'] : -1;

    $fnd = false;
    foreach ($vp['Associations'] as $a) {
        if ($a['Value'] == $value) {
            $fnd = true;
            break;
        }
    }
    if ($fnd == false) {
        IPS_SetVariableProfileAssociation($ident, $value, $name, $icon, $color);
    }

    return true;
}