<?php

declare(strict_types=1);

// HmIP-SCI
$setting = [
    'name' => 'Kontakt',
    0      => [
        'DUTY_CYCLE' => [
            'doArchive' => true,
        ],
        'ERROR_CODE' => [
            'isHidden' => true,
        ],
        'INSTALL_TEST' => [
            'isHidden' => true,
        ],
        'LOW_BAT' => [
            'name'          => 'Batterie',
            'customProfile' => '~Battery',
            'doArchive'     => true,
        ],
        'OPERATING_VOLTAGE' => [
            'name'          => 'Versorgungsspannung',
            'customProfile' => '~Volt',
            'doArchive'     => true,
        ],
        'OPERATING_VOLTAGE_STATUS' => [
            'isHidden' => true,
        ],
        'RSSI_DEVICE' => [
            'doArchive' => true,
        ],
        'RSSI_PEER' => [
            'doArchive' => true,
        ],
        'SABOTAGE' => [
            'isHidden' => true,
        ],
        'UPDATE_PENDING' => [
            'isHidden' => true,
        ],
    ],
    1 => [
        'isMain' => true,
        'STATE'  => [
            'name'          => 'Zustand',
            'customProfile' => 'HM.Contact',
            'doArchive'     => true,
        ],
    ],
];

echo json_encode($setting);
