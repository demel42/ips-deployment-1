<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'HM.SmokeDetectorAlarmStatus',
    'ProfileType'  => VARIABLETYPE_INTEGER,
    'Icon'         => '',
    'Prefix'       => '',
    'Suffix'       => '',
    'MinValue'     => 0.0,
    'MaxValue'     => 0.0,
    'StepSize'     => 1.0,
    'Digits'       => 0,
    'Associations' => [
        0 => [
            'Value' => 0.0,
            'Name'  => 'Ruhezustand',
            'Icon'  => '',
            'Color' => -1,
        ],
        1 => [
            'Value' => 1.0,
            'Name'  => 'Alarm (Auslöser)',
            'Icon'  => '',
            'Color' => 0xEE0000,
        ],
        2 => [
            'Value' => 2.0,
            'Name'  => 'Einbruch-Alarm',
            'Icon'  => '',
            'Color' => -1,
        ],
        3 => [
            'Value' => 3.0,
            'Name'  => 'Alarm (weitergeleitet)',
            'Icon'  => '',
            'Color' => 0xFFA500,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
