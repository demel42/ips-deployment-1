<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.Alarm',
    'ProfileType'  => VARIABLETYPE_INTEGER,
    'Icon'         => '',
    'Prefix'       => '',
    'Suffix'       => '',
    'MinValue'     => 0.0,
    'MaxValue'     => 0.0,
    'StepSize'     => 0.0,
    'Digits'       => 0,
    'Associations' => [
        0 => [
            'Value' => 0.0,
            'Name'  => 'OK',
            'Icon'  => '',
            'Color' => 0x00F900,
        ],
        1 => [
            'Value' => 1.0,
            'Name'  => 'Rauch',
            'Icon'  => '',
            'Color' => 0xFF0000,
        ],
        2 => [
            'Value' => 2.0,
            'Name'  => 'Hitze',
            'Icon'  => '',
            'Color' => 0xFF6600,
        ],
        3 => [
            'Value' => 4.0,
            'Name'  => 'CO',
            'Icon'  => '',
            'Color' => 0xEEFF00,
        ],
        4 => [
            'Value' => 128.0,
            'Name'  => 'Gas',
            'Icon'  => '',
            'Color' => 0xEC13E5,
        ],
        5 => [
            'Value' => 255.0,
            'Name'  => 'kombinierter Alarm',
            'Icon'  => '',
            'Color' => 0x00FFFF,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
