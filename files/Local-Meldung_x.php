<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.Meldung_x',
    'ProfileType'  => VARIABLETYPE_INTEGER,
    'Icon'         => 'Clock',
    'Prefix'       => '',
    'Suffix'       => '',
    'MinValue'     => 0.0,
    'MaxValue'     => 1440.0,
    'StepSize'     => 0.0,
    'Digits'       => 0,
    'Associations' => [
        0 => [
            'Value' => 15.0,
            'Name'  => '15 m',
            'Icon'  => '',
            'Color' => -1,
        ],
        1 => [
            'Value' => 30.0,
            'Name'  => '30 m',
            'Icon'  => '',
            'Color' => -1,
        ],
        2 => [
            'Value' => 60.0,
            'Name'  => '1 h',
            'Icon'  => '',
            'Color' => -1,
        ],
        3 => [
            'Value' => 120.0,
            'Name'  => '2 h',
            'Icon'  => '',
            'Color' => -1,
        ],
        4 => [
            'Value' => 180.0,
            'Name'  => '3 h',
            'Icon'  => '',
            'Color' => -1,
        ],
        5 => [
            'Value' => 360.0,
            'Name'  => '6 h',
            'Icon'  => '',
            'Color' => -1,
        ],
        6 => [
            'Value' => 720.0,
            'Name'  => '12 h',
            'Icon'  => '',
            'Color' => -1,
        ],
        7 => [
            'Value' => 1440.0,
            'Name'  => '24 h',
            'Icon'  => '',
            'Color' => -1,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
