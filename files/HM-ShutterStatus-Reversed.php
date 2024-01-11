<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'HM.ShutterStatus.Reversed',
    'ProfileType'  => VARIABLETYPE_FLOAT,
    'Icon'         => 'Intensity',
    'Prefix'       => '',
    'Suffix'       => '',
    'MinValue'     => 0.0,
    'MaxValue'     => 1.0,
    'StepSize'     => 0.0,
    'Digits'       => 3,
    'Associations' => [
        0 => [
            'Value' => 0.0,
            'Name'  => 'Geschlossen',
            'Icon'  => '',
            'Color' => -1,
        ],
        1 => [
            'Value' => 0.25,
            'Name'  => 'Unten',
            'Icon'  => '',
            'Color' => -1,
        ],
        2 => [
            'Value' => 0.55,
            'Name'  => 'Dreiviertel',
            'Icon'  => '',
            'Color' => -1,
        ],
        3 => [
            'Value' => 0.75,
            'Name'  => 'Hälfte',
            'Icon'  => '',
            'Color' => -1,
        ],
        4 => [
            'Value' => 0.95,
            'Name'  => 'Viertel',
            'Icon'  => '',
            'Color' => -1,
        ],
        5 => [
            'Value' => 1.0,
            'Name'  => 'Oben',
            'Icon'  => '',
            'Color' => -1,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
