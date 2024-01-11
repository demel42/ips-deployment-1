<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.Klingel',
    'ProfileType'  => VARIABLETYPE_BOOLEAN,
    'Icon'         => 'Alert',
    'Prefix'       => '',
    'Suffix'       => '',
    'MinValue'     => 0.0,
    'MaxValue'     => 0.0,
    'StepSize'     => 0.0,
    'Digits'       => 0,
    'Associations' => [
        0 => [
            'Value' => false,
            'Name'  => 'betätigt',
            'Icon'  => '',
            'Color' => -1,
        ],
        1 => [
            'Value' => true,
            'Name'  => 'nein',
            'Icon'  => '',
            'Color' => 0x00FF00,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
