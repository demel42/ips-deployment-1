<?php

declare(strict_types=1);

// HM-SEC-SCO
$setting = [
    'name' => 'Kontakt',
    0      => [
        'DEVICE_IN_BOOTLOADER' => [
            'isHidden' => true,
        ],
        'LOWBAT' => [
            'name'     => 'Batterie',
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
        'UPDATE_PENDING' => [
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
            'name'          => 'Zustand',
            'customProfile' => '~Window',
            'disableAction' => true,
            'doArchive'     => true,
        ],
    ],
];

echo json_encode($setting);