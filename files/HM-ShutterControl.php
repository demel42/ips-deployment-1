<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'HM.ShutterControl',
    'ProfileType'  => VARIABLETYPE_INTEGER,
    'Icon'         => 'Shutter',
    'Prefix'       => '',
    'Suffix'       => '',
    'MinValue'     => 0.0,
    'MaxValue'     => 0.0,
    'StepSize'     => 0.0,
    'Digits'       => 0,
    'Associations' => [
        0 => [
            'Value' => -1.0,
            'Name'  => 'Ab',
            'Icon'  => '',
            'Color' => 0x0000FF,
        ],
        1 => [
            'Value' => 0.0,
            'Name'  => 'Stop',
            'Icon'  => '',
            'Color' => 0x000000,
        ],
        2 => [
            'Value' => 1.0,
            'Name'  => 'Auf',
            'Icon'  => '',
            'Color' => 0x0000FF,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
