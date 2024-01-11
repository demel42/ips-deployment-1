<?php

declare(strict_types=1);

// HM-LC-Sw1-FM
$setting =

[
    'name' => 'Schaltaktor',
    0      => [
        'DUTYCYCLE' => [
            'doArchive' => true,
        ],
        'RSSI_DEVICE' => [
            'doArchive' => true,
        ],
        'RSSI_PEER' => [
            'doArchive' => true,
        ],
        'STICKY_UNREACH' => [
            'isHidden' => true,
        ],
        'LOWBAT' => [
            'isHidden' => true,
        ],
    ],
    1 => [
        'isMain'  => true,
        'INHIBIT' => [
            'isHidden' => true,
        ],
        'STATE' => [
            'name'      => 'Zustand',
            'doArchive' => true,
        ],
        'WORKING' => [
            'isHidden' => true,
        ],
    ],
];

echo json_encode($setting);