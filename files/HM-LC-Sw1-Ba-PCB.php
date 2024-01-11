<?php

declare(strict_types=1);

// HM-LC-Sw1-Ba-PCB
$setting = [
    'name' => 'Schaltaktor',
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
        'STICKY_UNREACH' => [
            'isHidden'      => true,
            'disableAction' => true,
        ],
        'UPDATE_PENDING' => [
            'isHidden' => true,
        ],
    ],
    1 => [
        'INHIBIT' => [
            'isHidden'      => true,
            'disableAction' => true,
        ],
        'STATE' => [
            'name' => 'Zustand',
        ],
        'WORKING' => [
            'isHidden' => true,
        ],
        'isMain' => true,
    ],
];

echo json_encode($setting);
