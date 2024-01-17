<?php

declare(strict_types=1);

require_once IPS_GetScriptFile(GetLocalConfig('GLOBAL_HELPER'));

function Variable_Create(int $parID, string $ident, string $name, int $varType, string $varProf = '', int $action = 0, int $pos = 0)
{
    if ($ident == '') {
        $varID = @IPS_GetObjectIDByName($name, $parID);
    } else {
        $varID = @IPS_GetObjectIDByIdent($ident, $parID);
    }
    if ($varID == false) {
        $varID = IPS_CreateVariable($varType);
        IPS_SetName($varID, $name);
        IPS_SetParent($varID, $parID);
        if ($ident != '') {
            IPS_SetIdent($varID, $ident);
        }
        if ($varProf != '') {
            IPS_SetVariableCustomProfile($varID, $varProf);
        }
        if ($action > 0) {
            IPS_SetVariableCustomAction($varID, $action);
        }
        IPS_SetPosition($varID, $pos);
    }
    return $varID;
}