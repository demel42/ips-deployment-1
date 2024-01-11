<?php

declare(strict_types=1);

// HmIP-FDT
$setting = [
    'name' => 'Dimmer',
    0      => [
        'ACTUAL_TEMPERATURE' => [
            'isHidden' => true,
        ],
        'ACTUAL_TEMPERATURE_STATUS' => [
            'isHidden' => true,
        ],
        'ERROR_CODE' => [
            'isHidden' => true,
        ],
        'ERROR_OVERHEAT' => [
            'isHidden' => true,
        ],
        'ERROR_OVERLOAD' => [
            'isHidden' => true,
        ],
        'ERROR_UPDATE' => [
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
    2 => [
        'isMain'         => true,
        'ACTIVITY_STATE' => [
            'isHidden' => true,
        ],
        'LEVEL' => [
            'name'          => 'Helligkeit',
            'doArchive'     => true,
            'customProfile' => 'Local.Brightness',
        ],
        'LEVEL_STATUS' => [
            'isHidden' => true,
        ],
        'PROCESS' => [
            'isHidden' => true,
        ],
        'SECTION' => [
            'isHidden' => true,
        ],
        'SECTION_STATUS' => [
            'isHidden' => true,
        ],

    ],
];

echo json_encode($setting);
