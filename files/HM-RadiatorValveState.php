<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'HM.RadiatorValveState',
    'ProfileType'  => VARIABLETYPE_INTEGER,
    'Icon'         => '',
    'Prefix'       => '',
    'Suffix'       => '',
    'MinValue'     => 0.0,
    'MaxValue'     => 0.0,
    'StepSize'     => 0.0,
    'Digits'       => 1,
    'Associations' => [
        0 => [
            'Value' => 0.0,
            'Name'  => 'Zustand unbestimmt',
            'Icon'  => '',
            'Color' => 0xEE0000,
        ],
        1 => [
            'Value' => 1.0,
            'Name'  => 'Bereit zum Start',
            'Icon'  => '',
            'Color' => 0xEE0000,
        ],
        2 => [
            'Value' => 2.0,
            'Name'  => 'Adaptionsfahrt ausstehend',
            'Icon'  => '',
            'Color' => 0xEE0000,
        ],
        3 => [
            'Value' => 3.0,
            'Name'  => 'Adaptionsfahrt läuft',
            'Icon'  => '',
            'Color' => 0x0000FF,
        ],
        4 => [
            'Value' => 4.0,
            'Name'  => 'Adaptionsfahrt abgeschlossen',
            'Icon'  => '',
            'Color' => 0x32CD32,
        ],
        5 => [
            'Value' => 5.0,
            'Name'  => 'Ventil schwergängig (F1)',
            'Icon'  => '',
            'Color' => 0xEE0000,
        ],
        6 => [
            'Value' => 6.0,
            'Name'  => 'Stellbereich zu groß (F2)',
            'Icon'  => '',
            'Color' => 0xEE0000,
        ],
        7 => [
            'Value' => 7.0,
            'Name'  => 'Stellbereich zu klein (F3)',
            'Icon'  => '',
            'Color' => 0xEE0000,
        ],
        8 => [
            'Value' => 8.0,
            'Name'  => 'Fehler',
            'Icon'  => '',
            'Color' => 0xEE0000,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
