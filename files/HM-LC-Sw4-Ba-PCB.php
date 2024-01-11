<?php

declare(strict_types=1);

// HM-LC-Sw4-Ba-PCB
$setting = [
    'name' => 'Vierfach-Schaltaktor',
    0      => [
        'AES_KEY' => [
            'isHidden' => true,
        ],
        'DEVICE_IN_BOOTLOADER' => [
            'isHidden' => true,
        ],
        'DUTYCYCLE' => [
            'doArchive' => true,
        ],
        'LOWBAT' => [
            'name'      => 'Stromversorgung',
            'doArchive' => true,
        ],
        'RSSI_DEVICE' => [
            'doArchive' => true,
        ],
        'RSSI_PEER' => [
            'doArchive' => true,
        ],
        'STICKY_UNREACH' => [
            'isHidden'      => true,
            'disableAction' => true,
        ],
        'UPDATE_PENDING' => [
            'isHidden' => true,
        ],
    ],
    1 => [
        'isMain'  => true,
        'name'    => 'Schalter 1',
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
        'isMain'  => true,
        'name'    => 'Schalter 2',
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
    3 => [
        'isMain'  => true,
        'name'    => 'Schalter 3',
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
    4 => [
        'isMain'  => true,
        'name'    => 'Schalter 4',
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
