<?php

declare(strict_types=1);

require_once IPS_GetScriptFile(GetLocalConfig('GLOBAL_HELPER'));

function Make_ShutterMinimumLevel($destID)
{
    $varActionID = IPS_GetObjectIDByName('IPS.SetValue', GetLocalConfig('Aktions-Scripte'));

    $varID = IPS_CreateVariable(VARIABLETYPE_FLOAT);
    IPS_SetParent($varID, $destID);
    IPS_SetName($varID, 'minimale Rolladenhöhe');
    SetValueFloat($varID, 0.9);
    IPS_SetVariableCustomProfile($varID, 'HM.ShutterPosition.Reversed');
    IPS_SetVariableCustomAction($varID, $varActionID);

    $varID = IPS_CreateVariable(VARIABLETYPE_BOOLEAN);
    IPS_SetParent($varID, $destID);
    IPS_SetName($varID, 'minimale Rolladenhöhe beachten');
    SetValueBoolean($varID, false);
    IPS_SetVariableCustomProfile($varID, 'Local.JaNein');
    IPS_SetVariableCustomAction($varID, $varActionID);
}

// Make_ShutterMinimumLevel(<instID von "Rolladen">);
