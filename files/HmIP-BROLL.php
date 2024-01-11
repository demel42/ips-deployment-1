<?php

declare(strict_types=1);

// HmIP-BROLL
$setting = [
    'name' => 'Rolladen',
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
        'ACTIVITY_STATE' => [
            'name'          => 'Fahraktivität',
            'customProfile' => 'HM.ShutterActivity',
        ],
        'LEVEL' => [
            'name'          => 'Position',
            'customProfile' => 'HM.ShutterStatus.Reversed',
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
        'SELF_CALIBRATION_RESULT' => [
            'isHidden' => true,
        ],
    ],
    4 => [
        'ACTIVITY_STATE' => [
            'isHidden' => true,
        ],
        'CONTROL' => [
            'name'          => 'Steuerung',
            'create'        => true,
            'variablenTyp'  => 1,
            'customProfile' => 'HM.ShutterControl',
            'customAction'  => 'HM.SetShutterControl',
        ],
        'LEVEL' => [
            'name'          => 'Soll-Rolladenhöhe',
            'customProfile' => 'HM.ShutterPosition.Reversed',
            'customAction'  => 'HM.SetShutterPosition',
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
        'isMain' => true,
    ],
];

echo json_encode($setting);
