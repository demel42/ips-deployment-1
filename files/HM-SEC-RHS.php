<?php

declare(strict_types=1);

// HM-SEC-RHS
$setting = [
    'name' => 'Fenster',
    0      => [
        'LOWBAT' => [
            'isHidden' => true,
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
    ],
    1 => [
        'isMain' => true,
        'ERROR'  => [
            'isHidden' => true,
        ],
        'INSTALL_TEST' => [
            'isHidden' => true,
        ],
        'LOWBAT' => [
            'name'      => 'Batterie',
            'doArchive' => true,
        ],
        'STATE' => [
            'name'      => 'Zustand',
            'doArchive' => true,
        ],
    ],
];

echo json_encode($setting);