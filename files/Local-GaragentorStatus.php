<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.GaragentorStatus',
    'ProfileType'  => VARIABLETYPE_INTEGER,
    'Icon'         => 'Garage',
    'Prefix'       => '',
    'Suffix'       => '',
    'MinValue'     => 0.0,
    'MaxValue'     => 0.0,
    'StepSize'     => 0.0,
    'Digits'       => 0,
    'Associations' => [
        0 => [
            'Value' => -1.0,
            'Name'  => 'Fehler',
            'Icon'  => 'Warning',
            'Color' => -1,
        ],
        1 => [
            'Value' => 0.0,
            'Name'  => 'geschlossen',
            'Icon'  => '',
            'Color' => -1,
        ],
        2 => [
            'Value' => 1.0,
            'Name'  => 'lüften',
            'Icon'  => '',
            'Color' => -1,
        ],
        3 => [
            'Value' => 2.0,
            'Name'  => 'offen',
            'Icon'  => '',
            'Color' => -1,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
