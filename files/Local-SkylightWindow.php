<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.SkylightWindow',
    'ProfileType'  => VARIABLETYPE_INTEGER,
    'Icon'         => 'Window',
    'Prefix'       => '',
    'Suffix'       => '',
    'MinValue'     => 0.0,
    'MaxValue'     => 2.0,
    'StepSize'     => 0.0,
    'Digits'       => 0,
    'Associations' => [
        0 => [
            'Value' => 0.0,
            'Name'  => 'Geschlossen',
            'Icon'  => '',
            'Color' => -1,
        ],
        1 => [
            'Value' => 1.0,
            'Name'  => 'Lüften',
            'Icon'  => '',
            'Color' => 0x0000FF,
        ],
        2 => [
            'Value' => 2.0,
            'Name'  => 'Geöffnet',
            'Icon'  => '',
            'Color' => 0x00FF00,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
