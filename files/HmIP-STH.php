<?php

declare(strict_types=1);

// HmIP-STH
$setting = [
    'name' => 'Raumklima',
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
    ],
    1 => [
        'ACTIVE_PROFILE' => [
            'isHidden' => true,
        ],
        'ACTUAL_TEMPERATURE' => [
            'name'      => 'Temperatur',
            'doArchive' => true,
        ],
        'ACTUAL_TEMPERATURE_STATUS' => [
            'isHidden' => true,
        ],
        'BOOST_MODE' => [
            'isHidden' => true,
        ],
        'BOOST_TIME' => [
            'isHidden' => true,
        ],
        'FROST_PROTECTION' => [
            'isHidden' => true,
        ],
        'HEATING_COOLING' => [
            'isHidden' => true,
        ],
        'HUMIDITY' => [
            'name'          => 'Luftfeuchte',
            'customProfile' => '~Humidity',
            'doArchive'     => true,
        ],
        'HUMIDITY_STATUS' => [
            'isHidden' => true,
        ],
        'PARTY_MODE' => [
            'isHidden' => true,
        ],
        'PARTY_SET_POINT_TEMPERATURE' => [
            'isHidden' => true,
        ],
        'PARTY_TIME_END' => [
            'isHidden' => true,
        ],
        'PARTY_TIME_START' => [
            'isHidden' => true,
        ],
        'QUICK_VETO_TIME' => [
            'isHidden' => true,
        ],
        'SET_POINT_MODE' => [
            'isHidden' => true,
        ],
        'SET_POINT_TEMPERATURE' => [
            'isHidden'      => true,
            'disableAction' => true,
        ],
        'SWITCH_POINT_OCCURED' => [
            'isHidden' => true,
        ],
        'WINDOW_STATE' => [
            'isHidden' => true,
        ],
        'isMain' => true,
    ],
];

echo json_encode($setting);
