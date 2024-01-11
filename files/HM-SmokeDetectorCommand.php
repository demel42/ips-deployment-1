<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'HM.SmokeDetectorCommand',
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
            'Name'  => '-',
            'Icon'  => '',
            'Color' => -1,
        ],
        1 => [
            'Value' => 1.0,
            'Name'  => 'Einbruch-Alarm aus',
            'Icon'  => '',
            'Color' => -1,
        ],
        2 => [
            'Value' => 2.0,
            'Name'  => 'Einbruch-Alarm ein',
            'Icon'  => '',
            'Color' => -1,
        ],
        3 => [
            'Value' => 3.0,
            'Name'  => 'Rauchtest',
            'Icon'  => '',
            'Color' => -1,
        ],
        4 => [
            'Value' => 4.0,
            'Name'  => 'Kommunikationstest',
            'Icon'  => '',
            'Color' => -1,
        ],
        5 => [
            'Value' => 5.0,
            'Name'  => 'Kommunikationstest (weitergeleitet)',
            'Icon'  => '',
            'Color' => -1,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
