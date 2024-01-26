<?php

declare(strict_types=1);

require_once IPS_GetScriptFile(GetLocalConfig('GLOBAL_HELPER'));

function HM_Check4TypeLinks()
{
    echo 'check HM-instances for missing link in "Geräte-Typen"' . PHP_EOL;

    $typIDs = IPS_GetChildrenIDs(GetLocalConfig('Geräte-Typen'));

    $instIDs = IPS_GetInstanceListByModuleID('{EE4A81C6-5C90-4DB7-AD2F-F6BBD521412E}'); // HomeMatic
    foreach ($instIDs as $instID) {
        $fnd = false;
        foreach ($typIDs as $i => $typID) {
            $devIDs = IPS_GetChildrenIDs($typID);
            foreach ($devIDs as $j => $devID) {
                $lnk = IPS_GetLink($devID);
                if ($lnk['TargetID'] == $instID) {
                    $fnd = true;
                    break;
                }
            }
        }
        if ($fnd == false) {
            echo '  instance ' . $instID . '(' . IPS_GetLocation($instID) . ')' . PHP_EOL;
        }
    }
}

HM_Check4TypeLinks();
