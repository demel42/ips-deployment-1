<?php

declare(strict_types=1);

// HM-SEN-MDIR-O-2
$setting = [
    'name' => 'Bewegungsmelder',
    0      => [
        'DEVICE_IN_BOOTLOADER' => [
            'isHidden' => true,
        ],
        'LOWBAT' => [
            'name'      => 'Batterie',
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
        'UPDATE_PENDING' => [
            'isHidden' => true,
        ],
    ],
    1 => [
        'isMain'     => true,
        'BRIGHTNESS' => [
            'name'      => 'Helligkeit',
            'doArchive' => true,
        ],
        'INSTALL_TEST' => [
            'isHidden' => true,
        ],
        'MOTION' => [
            'name'      => 'Bewegung',
            'doArchive' => true,
        ],
    ],
];

echo json_encode($setting);