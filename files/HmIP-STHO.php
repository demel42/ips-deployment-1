<?php

declare(strict_types=1);

// HmIP-STHO
$setting = [
    'name' => 'Raumklima',
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
        'TEMPERATURE_OUT_OF_RANGE' => [
            'isHidden' => true,
        ],
        'UPDATE_PENDING' => [
            'isHidden' => true,
        ],
    ],
    1 => [
        'isMain'             => true,
        'ACTUAL_TEMPERATURE' => [
            'name'      => 'Temperatur',
            'doArchive' => true,
        ],
        'ACTUAL_TEMPERATURE_STATUS' => [
            'isHidden' => true,
        ],
        'HUMIDITY' => [
            'name'      => 'Luftfeuchte',
            'doArchive' => true,
        ],
        'HUMIDITY_STATUS' => [
            'isHidden' => true,
        ],
    ],
];

echo json_encode($setting);
