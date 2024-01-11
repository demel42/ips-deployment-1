<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'HM.SmokeDetectorTestResult',
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
            'Name'  => 'Systemtest ok',
            'Icon'  => '',
            'Color' => 0x64C466,
        ],
        2 => [
            'Value' => 2.0,
            'Name'  => 'Systemtest fehlerhaft',
            'Icon'  => '',
            'Color' => 0xEE0000,
        ],
        3 => [
            'Value' => 3.0,
            'Name'  => 'Kommunikationstest gesendet',
            'Icon'  => '',
            'Color' => -1,
        ],
        4 => [
            'Value' => 4.0,
            'Name'  => 'Kommunikationstest ok',
            'Icon'  => '',
            'Color' => 0x64C466,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
