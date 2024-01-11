<?php

declare(strict_types=1);

// HmIP-ESI
$setting = [
    'name' => 'Energiezähler',
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
        'SABOTAGE' => [
            'isHidden' => true,
        ],
        'UPDATE_PENDING' => [
            'isHidden' => true,
        ],
        'ERROR_COMMUNICATION_SENSOR' => [
            'isHidden' => true,
        ],
        'SENSOR_ERROR' => [
        ],
    ],
    1 => [
        'isMain'                 => true,
        'CHANNEL_OPERATION_MODE' => [
            'name'          => 'Sensor',
            'customProfile' => 'HM.EnergyMeterOperationMode',
        ],
        'GAS_FLOW' => [
            'isHidden' => true,
        ],
        'GAS_FLOW_STATUS' => [
            'isHidden'      => true,
            'customProfile' => 'HM.EnergyMeterCounterStatus',
        ],
        'POWER' => [
            'name'          => 'Leistung',
        ],
        'POWER_STATUS' => [
            'isHidden'      => true,
            'customProfile' => 'HM.EnergyMeterCounterStatus',
        ],
        'SELF_CALIBRATION_RESULT' => [
            'isHidden'      => true,
            'customProfile' => 'HM.EnergyMeterOperationMode',
        ],
    ],
    2 => [
        'ENERGY_COUNTER' => [
            'name'          => 'Bezug HT',
        ],
        'ENERGY_COUNTER_STATUS' => [
            'isHidden'      => true,
            'customProfile' => 'HM.EnergyMeterCounterStatus',
        ],
        'GAS_VOLUME' => [
            'isHidden' => true,
        ],
        'GAS_VOLUME_STATUS' => [
            'isHidden'      => true,
            'customProfile' => 'HM.EnergyMeterCounterStatus',
        ],
    ],
    3 => [
        'ENERGY_COUNTER' => [
            'name'          => 'Bezug NT',
        ],
        'ENERGY_COUNTER_STATUS' => [
            'isHidden'      => true,
            'customProfile' => 'HM.EnergyMeterCounterStatus',
        ],
    ],
    4 => [
        'ENERGY_COUNTER' => [
            'name'          => 'Abgabe',
        ],
        'ENERGY_COUNTER_STATUS' => [
            'isHidden'      => true,
            'customProfile' => 'HM.EnergyMeterCounterStatus',
        ],
    ],
];

echo json_encode($setting);
