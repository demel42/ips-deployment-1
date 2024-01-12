<?php

declare(strict_types=1);

require_once IPS_GetScriptFile(MapLocalConstant('HELPER_GLOBAL'));

$value = $_IPS['VALUE'];
$limit = HM_ShutterGetMinimumLevel(IPS_GetParent($_IPS['VARIABLE']));
if ($value < $limit) {
    $value = $limit;
}
IPS_RequestAction(IPS_GetParent($_IPS['VARIABLE']), 'LEVEL', $value);
