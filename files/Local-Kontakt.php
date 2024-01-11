<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.Kontakt',
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
            'Name'  => 'Alarm',
            'Icon'  => '',
            'Color' => 0xFF2600,
        ],
        1 => [
            'Value' => 1.0,
            'Name'  => 'OK',
            'Icon'  => '',
            'Color' => 0x00F900,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
