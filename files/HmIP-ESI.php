<?php

declare(strict_types=1);

require_once IPS_GetScriptFile(MapLocalConstant('HELPER_GLOBAL'));

$associations = [
    ['Wert' => 0, 'Name' => 'unbekannt', 'Farbe' => -1],
    ['Wert' => 1, 'Name' => 'Gas', 'Farbe' => -1],
    ['Wert' => 2, 'Name' => 'LED', 'Farbe' => -1],
    ['Wert' => 3, 'Name' => 'IEC', 'Farbe' => -1],
    ['Wert' => 4, 'Name' => 'IEC/SML', 'Farbe' => -1],
    ['Wert' => 5, 'Name' => 'IEC/SML WH', 'Farbe' => -1],
    ['Wert' => 6, 'Name' => 'IEC/D0 Modus A', 'Farbe' => -1],
    ['Wert' => 7, 'Name' => 'IEC/D0 Modus B', 'Farbe' => -1],
    ['Wert' => 8, 'Name' => 'IEC/D0 Modus C', 'Farbe' => -1],
    ['Wert' => 9, 'Name' => 'IEC/D0 Modus D', 'Farbe' => -1],
];
CreateVarProfile('HM.EnergyMeterOperationMode', VARIABLETYPE_INTEGER, '', 0, 0, 1, 0, '', $associations, true);

$associations = [
    ['Wert' => 0, 'Name' => 'normal', 'Farbe' => -1],
    ['Wert' => 0, 'Name' => 'unbekannt', 'Farbe' => -1],
    ['Wert' => 0, 'Name' => 'Überlauf', 'Farbe' => 0xEE0000],
    ['Wert' => 0, 'Name' => 'Unterlauf', 'Farbe' => 0xEE0000],
];
CreateVarProfile('HM.EnergyMeterCounterStatus', VARIABLETYPE_INTEGER, '', 0, 0, 1, 0, '', $associations, true);

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
