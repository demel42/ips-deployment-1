<?php

declare(strict_types=1);

require_once IPS_GetScriptFile(GetLocalConfig('GLOBAL_HELPER'));

$instID = GetLocalConfig('Connect Control');
$r = CC_GetTrafficStatistics($instID);
echo $instID . '=' . print_r($r, true) . PHP_EOL;