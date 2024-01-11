<?php

declare(strict_types=1);

// HmIP-SWSD
$setting = [
    'name' => 'Rauchmelder',
    0      => [
        'DUTY_CYCLE' => [
            'doArchive' => true,
        ],
        'INSTALL_TEST' => [
            'isHidden' => true,
        ],
        'RSSI_DEVICE' => [
            'doArchive' => true,
        ],
        'RSSI_PEER' => [
            'doArchive' => true,
        ],
        'LOW_BAT' => [
            'name'      => 'Batterie',
            'doArchive' => true,
        ],
        'TIME_OF_OPERATION' => [
            'name'          => 'Betriebsdauer',
            'customProfile' => 'HM.SmokeDetectorOperationTime',
            'doArchive'     => true,
        ],
        'TIME_OF_OPERATION_STATUS' => [
        ],
    ],
    1 => [
        'ERROR_CODE' => [
            'isHidden' => true,
        ],
        'ERROR_DEGRADED_CHAMBER' => [
            'name'          => 'Rauchkammer',
            'customProfile' => 'HM.SmokeDetectorChamberStatus',
        ],
        'SMOKE_DETECTOR_ALARM_STATUS' => [
            'name'          => 'Alarm-Status',
            'customProfile' => 'HM.SmokeDetectorAlarmStatus',
            'doArchive'     => true,
        ],
        'SMOKE_DETECTOR_COMMAND' => [
            'name'          => 'Rauchmelder steuern',
            'create'        => true,
            'variablenTyp'  => 1,
            'customProfile' => 'HM.SmokeDetectorCommand',
            'customAction'  => 'HM.SetSmokeDetectorCommand',
        ],
        'SMOKE_DETECTOR_TEST_RESULT' => [
            'name'          => 'Test-Ergebnis',
            'customProfile' => 'HM.SmokeDetectorTestResult',
            'doArchive'     => true,
        ],
        'isMain' => true,
    ],
];

echo json_encode($setting);