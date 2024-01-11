<?php

declare(strict_types=1);

// HM-LC-Sw2PBU-FM
$setting = [
    'name' => 'Doppel-Schalteraktor',
    0      => [
        'AES_KEY' => [
            'isHidden' => true,
        ],
        'DEVICE_IN_BOOTLOADER' => [
            'isHidden' => true,
        ],
        'DUTYCYCLE' => [
            'isHidden' => true,
        ],
        'LOWBAT' => [
            'isHidden' => true,
        ],
        'STICKY_UNREACH' => [
            'isHidden' => true,
        ],
        'RSSI_DEVICE' => [
            'doArchive' => true,
        ],
        'RSSI_PEER' => [
            'doArchive' => true,
        ],
        'UPDATE_PENDING' => [
            'isHidden' => true,
        ],
    ],
    1 => [
        'name'    => 'Aktor 1',
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
    2 => [
        'name'    => 'Aktor 2',
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
