<?php

declare(strict_types=1);

// HM-CC-RT-DN
$setting = [
    'name' => 'Thermostat',
    0      => [
        'DEVICE_IN_BOOTLOADER' => [
            'isHidden' => true,
        ],
        'INHIBIT' => [
            'isHidden' => true,
        ],
        'LOWBAT' => [
            'name'      => 'Batterie',
            'doArchive' => true,
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
    4 => [
        'isMain'             => true,
        'ACTUAL_TEMPERATURE' => [
            'name'      => 'Temperatur',
            'doArchive' => true,
        ],
        'BATTERY_STATE' => [
            'isHidden'      => true,
            'customProfile' => '~Volt',
            'doArchive'     => true,
        ],
        'BOOST_STATE' => [
            'isHidden'  => true,
            'doArchive' => true,
        ],
        'CONTROL_MODE' => [
            'name'          => 'Betriebsmodus',
            'customProfile' => 'HM.RadiatorControlMode',
            'customAction'  => 'HM.SetRadiatorControlMode',
            'doArchive'     => true,
        ],
        'FAULT_REPORTING' => [
            'isHidden' => true,
        ],
        'PARTY_START_DAY' => [
            'isHidden' => true,
        ],
        'PARTY_START_MONTH' => [
            'isHidden' => true,
        ],
        'PARTY_START_TIME' => [
            'isHidden' => true,
        ],
        'PARTY_START_YEAR' => [
            'isHidden' => true,
        ],
        'PARTY_STOP_DAY' => [
            'isHidden' => true,
        ],
        'PARTY_STOP_MONTH' => [
            'isHidden' => true,
        ],
        'PARTY_STOP_TIME' => [
            'isHidden' => true,
        ],
        'PARTY_STOP_YEAR' => [
            'isHidden' => true,
        ],
        'PARTY_TEMPERATURE' => [
            'isHidden' => true,
        ],
        'SET_TEMPERATURE' => [
            'name'      => 'Soll-Temperatur',
            'doArchive' => true,
        ],
        'VALVE_STATE' => [
            'name'      => 'Ventilöffnung',
            'doArchive' => true,
        ],
    ],
];

echo json_encode($setting);
