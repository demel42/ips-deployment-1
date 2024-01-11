<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.Valve',
    'ProfileType'  => VARIABLETYPE_BOOLEAN,
    'Icon'         => 'Radiator',
    'Prefix'       => '',
    'Suffix'       => '',
    'MinValue'     => 0.0,
    'MaxValue'     => 0.0,
    'StepSize'     => 0.0,
    'Digits'       => 0,
    'Associations' => [
        0 => [
            'Value' => false,
            'Name'  => 'Geschlossen',
            'Icon'  => '',
            'Color' => 0x0096FF,
        ],
        1 => [
            'Value' => true,
            'Name'  => 'Geöffnet',
            'Icon'  => '',
            'Color' => 0xFF2600,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
