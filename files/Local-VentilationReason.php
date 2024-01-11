<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.VentilationReason',
    'ProfileType'  => VARIABLETYPE_INTEGER,
    'Icon'         => '',
    'Prefix'       => '',
    'Suffix'       => '',
    'MinValue'     => 0.0,
    'MaxValue'     => 100.0,
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
            'Name'  => 'stündlich',
            'Icon'  => '',
            'Color' => -1,
        ],
        2 => [
            'Value' => 2.0,
            'Name'  => 'Temperatur',
            'Icon'  => '',
            'Color' => -1,
        ],
        3 => [
            'Value' => 3.0,
            'Name'  => 'manuell',
            'Icon'  => '',
            'Color' => -1,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
