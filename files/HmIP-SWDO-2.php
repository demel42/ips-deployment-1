<?php

declare(strict_types=1);

// HmIP-SWDO-2
$setting = [
    'name' => 'Türkontakt',
    0      => [
        'DUTY_CYCLE' => [
            'doArchive' => true,
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
        'UPDATE_PENDING' => [
            'isHidden' => true,
        ],
        'SABOTAGE' => [
            'isHidden' => true,
        ],
    ],
    1 => [
        'isMain'               => true,
        'STATE'                => [
            'name'          => 'Zustand',
            'doArchive'     => true,
            'customProfile' => 'HM.Door',
        ],
    ],
];

echo json_encode($setting);
