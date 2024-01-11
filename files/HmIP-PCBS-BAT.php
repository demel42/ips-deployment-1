<?php

declare(strict_types=1);

// HmIP-PCBS-BAT
$setting = [
    'name' => 'Schaltaktor',
    0      => [
        'ACTUAL_TEMPERATURE' => [
            'isHidden' => true,
        ],
        'DUTY_CYCLE' => [
            'doArchive' => true,
        ],
        'ERROR_CODE' => [
            'isHidden' => true,
        ],
        'ERROR_OVERHEAT' => [
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
        'UPDATE_PENDING' => [
            'isHidden' => true,
        ],
    ],
    3 => [
        'isMain'  => true,
        'PROCESS' => [
            'isHidden' => true,
        ],
        'SECTION' => [
            'isHidden' => true,
        ],
        'SECTION_STATUS' => [
            'isHidden' => true,
        ],
        'STATE' => [
            'name'      => 'Zustand',
            'doArchive' => true,
        ],
    ],
];

echo json_encode($setting);
