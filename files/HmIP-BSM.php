<?php

declare(strict_types=1);

// HmIP-BSM
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
    1 => [
        'isOptional' => true,
        'PRESS_LONG' => [
            'isHidden' => true,
        ],
        'PRESS_LONG_RELEASE' => [
            'isHidden' => true,
        ],
        'PRESS_LONG_START' => [
            'isHidden' => true,
        ],
        'PRESS_SHORT' => [
            'isHidden' => true,
        ],
    ],
    2 => [
        'isOptional' => true,
        'PRESS_LONG' => [
            'isHidden' => true,
        ],
        'PRESS_LONG_RELEASE' => [
            'isHidden' => true,
        ],
        'PRESS_LONG_START' => [
            'isHidden' => true,
        ],
        'PRESS_SHORT' => [
            'isHidden' => true,
        ],
    ],
    4 => [
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
    7 => [
        'CURRENT' => [
            'name'      => 'Strom',
            'doArchive' => true,
        ],
        'CURRENT_STATUS' => [
            'isHidden' => true,
        ],
        'ENERGY_COUNTER' => [
            'name'            => 'Gesamter Verbrauch',
            'doArchive'       => true,
            'aggregationType' => 1,
            'ignoreZeros'     => true,
        ],
        'ENERGY_COUNTER_OVERFLOW' => [
            'isHidden' => true,
        ],
        'FREQUENCY' => [
            'name'      => 'Frequenz',
            'doArchive' => true,
        ],
        'FREQUENCY_STATUS' => [
            'isHidden' => true,
        ],
        'POWER' => [
            'name'      => 'Leistung',
            'doArchive' => true,
        ],
        'POWER_STATUS' => [
            'isHidden' => true,
        ],
        'VOLTAGE' => [
            'name'      => 'Spannung',
            'doArchive' => true,
        ],
        'VOLTAGE_STATUS' => [
            'isHidden' => true,
        ],
    ],
];

echo json_encode($setting);
