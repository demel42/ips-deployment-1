<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.SecurityState',
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
            'Name'  => 'alles geschlossen',
            'Icon'  => '',
            'Color' => 0x80FF00,
        ],
        1 => [
            'Value' => 1.0,
            'Name'  => '(teilweise) lüften',
            'Icon'  => '',
            'Color' => 0xFFFF80,
        ],
        2 => [
            'Value' => 2.0,
            'Name'  => '(teilweise) geöffnet',
            'Icon'  => '',
            'Color' => 0xFF0000,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
