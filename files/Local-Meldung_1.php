<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.Meldung_1',
    'ProfileType'  => VARIABLETYPE_INTEGER,
    'Icon'         => 'Clock',
    'Prefix'       => '',
    'Suffix'       => '',
    'MinValue'     => 0.0,
    'MaxValue'     => 60.0,
    'StepSize'     => 0.0,
    'Digits'       => 0,
    'Associations' => [
        0 => [
            'Value' => 0.0,
            'Name'  => 'sofort',
            'Icon'  => '',
            'Color' => -1,
        ],
        1 => [
            'Value' => 1.0,
            'Name'  => '1 m',
            'Icon'  => '',
            'Color' => -1,
        ],
        2 => [
            'Value' => 5.0,
            'Name'  => '5 m',
            'Icon'  => '',
            'Color' => -1,
        ],
        3 => [
            'Value' => 15.0,
            'Name'  => '15 m',
            'Icon'  => '',
            'Color' => -1,
        ],
        4 => [
            'Value' => 30.0,
            'Name'  => '30 m',
            'Icon'  => '',
            'Color' => -1,
        ],
        5 => [
            'Value' => 60.0,
            'Name'  => '1 h',
            'Icon'  => '',
            'Color' => -1,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
