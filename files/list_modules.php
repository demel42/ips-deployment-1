<?php

declare(strict_types=1);

foreach (IPS_GetModuleList() as $guid) {
    $module = IPS_GetModule($guid);
    $pair[$module['ModuleName']] = $guid;
}
ksort($pair);
foreach ($pair as $key=>$guid) {
    echo $key . ' = ' . $guid . PHP_EOL;
}