<?php

declare(strict_types=1);

foreach (IPS_GetLibraryList() as $guid) {
    $lib = IPS_GetLibrary($guid);
    $pair[$lib['Name']] = $guid;
}
ksort($pair);
foreach ($pair as $key=>$guid) {
    echo $key . ' = ' . $guid . PHP_EOL;
}