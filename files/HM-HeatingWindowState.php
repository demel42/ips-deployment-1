<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'HM.HeatingWindowState',
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
            'Name'  => 'Verschlossen',
            'Icon'  => '',
            'Color' => 0x339966,
        ],
        1 => [
            'Value' => 1.0,
            'Name'  => 'Offen',
            'Icon'  => '',
            'Color' => 0xFF0000,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
