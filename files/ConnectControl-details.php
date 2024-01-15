<?php

declare(strict_types=1);

require_once IPS_GetScriptFile(15814);

$instID = GetLocalConfig('Connect Control');
$r = CC_GetTrafficStatistics($instID);
echo $instID . '=' . print_r($r, true) . PHP_EOL;
