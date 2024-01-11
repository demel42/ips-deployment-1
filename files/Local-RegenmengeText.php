<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.RegenmengeText',
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
            'Name'  => 'trocken',
            'Icon'  => '',
            'Color' => -1,
        ],
        1 => [
            'Value' => 1.0,
            'Name'  => 'Nieselregen',
            'Icon'  => '',
            'Color' => -1,
        ],
        2 => [
            'Value' => 2.0,
            'Name'  => 'Sprühregen',
            'Icon'  => '',
            'Color' => -1,
        ],
        3 => [
            'Value' => 3.0,
            'Name'  => 'leicher Regen',
            'Icon'  => '',
            'Color' => -1,
        ],
        4 => [
            'Value' => 4.0,
            'Name'  => ' mäßiger Regen',
            'Icon'  => '',
            'Color' => -1,
        ],
        5 => [
            'Value' => 5.0,
            'Name'  => 'starker Regen',
            'Icon'  => '',
            'Color' => -1,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
