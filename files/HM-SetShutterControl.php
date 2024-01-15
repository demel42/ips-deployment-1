<?php

declare(strict_types=1);

require_once IPS_GetScriptFile(GetLocalConfig('GLOBAL_HELPER'));

$target = IPS_GetParent($_IPS['VARIABLE']);
switch ($_IPS['VALUE']) {
    case -1: // Ab
        HM_ShutterMoveDown($target);
        break;
    case 0: // Stop
        HM_ShutterStop($target);
        break;
    case 1: // Auf
        HM_ShutterMoveUp($target);
        break;
}

SetValue($_IPS['VARIABLE'], $_IPS['VALUE']);
