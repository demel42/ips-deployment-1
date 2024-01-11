<?php

declare(strict_types=1);

// HM-LC-Dim1TPBU-FM
$setting = [
    'name' => 'Dimmer',
    0      => [
        'AES_KEY' => [
            'isHidden' => true,
        ],
        'DEVICE_IN_BOOTLOADER' => [
            'isHidden' => true,
        ],
        'STICKY_UNREACH' => [
            'isHidden' => true,
        ],
        'UPDATE_PENDING' => [
            'isHidden' => true,
        ],
    ],
    1 => [
        'isMain'    => true,
        'DIRECTION' => [
            'isHidden' => true,
        ],
        'ERROR_OVERHEAT' => [
            'isHidden' => true,
        ],
        'ERROR_OVERLOAD' => [
            'isHidden' => true,
        ],
        'ERROR_REDUCED' => [
            'isHidden' => true,
        ],
        'INHIBIT' => [
            'isHidden' => true,
        ],
        'LEVEL' => [
            'name'          => 'Helligkeit',
            'doArchive'     => true,
            'customProfile' => 'Local.Brightness',
        ],
        'LEVEL_REAL' => [
            'isHidden' => true,
        ],
        'WORKING' => [
            'isHidden' => true,
        ],
    ]
];

echo json_encode($setting);
