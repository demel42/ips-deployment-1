<?php

declare(strict_types=1);

// HmIP-BS2
$setting = [
    'name' => 'Schalter',
    0      => [
        'ACTUAL_TEMPERATURE' => [
            'isHidden' => true,
        ],
        'ACTUAL_TEMPERATURE_STATUS' => [
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
        'OPERATING_VOLTAGE' => [
            'isHidden' => true,
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
    4 => [
        'isMain'  => true,
        'name'    => 'Schalter 1',
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
    8 => [
        'isMain'  => true,
        'name'    => 'Schalter 2',
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