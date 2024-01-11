<?php

declare(strict_types=1);

// HmIP-PSM
$setting = [
    'name' => 'Schaltsteckdose',
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
    6 => [
        'CURRENT' => [
            'name'          => 'Strom',
            'customProfile' => 'mAmpere.F',
            'doArchive'     => true,
        ],
        'CURRENT_STATUS' => [
            'isHidden' => true,
        ],
        'ENERGY_COUNTER' => [
            'name'            => 'Gesamter Verbrauch',
            'customProfile'   => 'Wh.F',
            'doArchive'       => true,
            'aggregationType' => 1,
            'ignoreZeros'     => true,
        ],
        'ENERGY_COUNTER_OVERFLOW' => [
            'isHidden' => true,
        ],
        'FREQUENCY' => [
            'name'          => 'Frequenz',
            'customProfile' => '~Hertz',
            'doArchive'     => true,
        ],
        'FREQUENCY_STATUS' => [
            'isHidden' => true,
        ],
        'POWER' => [
            'name'          => 'Leistung',
            'customProfile' => '~Watt.3680',
            'doArchive'     => true,
        ],
        'POWER_STATUS' => [
            'isHidden' => true,
        ],
        'VOLTAGE' => [
            'name'          => 'Spannung',
            'customProfile' => '~Volt',
            'doArchive'     => true,
        ],
        'VOLTAGE_STATUS' => [
            'isHidden' => true,
        ],
    ],
];

echo json_encode($setting);
