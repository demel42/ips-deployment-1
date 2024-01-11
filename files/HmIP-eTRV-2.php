<?php

declare(strict_types=1);

// HmIP-eTRV-2
$setting = [
    'name' => 'Thermostat',
    0      => [
        'DUTY_CYCLE' => [
            'doArchive' => true,
        ],
        'INSTALL_TEST' => [
            'isHidden' => true,
        ],
        'LOW_BAT' => [
            'name'      => 'Batterie',
            'doArchive' => true,
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
        'isMain'         => true,
        'ACTIVE_PROFILE' => [
            'disableAction' => true,
            'isHidden'      => true,
        ],
        'ACTUAL_TEMPERATURE' => [
            'name'      => 'Temperatur',
            'doArchive' => true,
        ],
        'ACTUAL_TEMPERATURE_STATUS' => [
            'isHidden' => true,
        ],
        'BOOST_MODE' => [
            'name'          => 'Boost',
            'customProfile' => '~Switch',
            'customAction'  => 'HM.SetValueBoolean',
        ],
        'BOOST_TIME' => [
            'isHidden' => true,
        ],
        'FROST_PROTECTION' => [
            'isHidden' => true,
        ],
        'LEVEL' => [
            'name'          => 'Ventilöffnung',
            'disableAction' => true,
            'customProfile' => 'HM.HeatingValveLevel',
            'doArchive'     => true,
        ],
        'LEVEL_STATUS' => [
            'isHidden' => true,
        ],
        'PARTY_MODE' => [
            'isHidden' => true,
        ],
        'PARTY_SET_POINT_TEMPERATURE' => [
            'isHidden' => true,
        ],
        'PARTY_TIME_END' => [
            'disableAction' => true,
            'isHidden'      => true,
        ],
        'PARTY_TIME_START' => [
            'disableAction' => true,
            'isHidden'      => true,
        ],
        'QUICK_VETO_TIME' => [
            'isHidden' => true,
        ],
        'SET_POINT_MODE' => [
            'name'          => 'Betriebsmodus',
            'customProfile' => 'HM.HeatingControlMode',
            'customAction'  => 'HM.SetHeatingControlMode',
        ],
        'SET_POINT_TEMPERATURE' => [
            'name'      => 'Soll-Temperatur',
            'doArchive' => true,
        ],
        'SWITCH_POINT_OCCURED' => [
            'isHidden' => true,
        ],
        'VALVE_ADAPTION' => [
            'disableAction' => true,
            'isHidden'      => true,
        ],
        'VALVE_STATE' => [
            'name'          => 'Ventilstatus',
            'customProfile' => 'HM.RadiatorValveState',
            'disableAction' => true,
            'doArchive'     => true,
        ],
        'WINDOW_STATE' => [
            'name'          => 'Fensterstatus',
            'customProfile' => 'HM.HeatingWindowState',
            'customAction'  => 'HM.SetHeatingWindowState',
        ],
    ],
];

echo json_encode($setting);
