<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'HM.Door',
    'ProfileType'  => VARIABLETYPE_INTEGER,
    'Icon'         => 'Door',
    'Prefix'       => '',
    'Suffix'       => '',
    'MinValue'     => 0.0,
    'MaxValue'     => 1.0,
    'StepSize'     => 0.0,
    'Digits'       => 0,
    'Associations' => [
        0 => [
            'Value' => 0.0,
            'Name'  => 'Geschlossen',
            'Icon'  => 'Door-100',
            'Color' => -1,
        ],
        1 => [
            'Value' => 1.0,
            'Name'  => 'Geöffnet',
            'Icon'  => 'Door-0',
            'Color' => 0x00FF00,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
