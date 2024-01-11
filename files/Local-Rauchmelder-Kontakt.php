<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.Rauchmelder-Kontakt',
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
            'Name'  => 'inaktiv',
            'Icon'  => '',
            'Color' => 0x64C466,
        ],
        1 => [
            'Value' => true,
            'Name'  => 'ausgelöst',
            'Icon'  => '',
            'Color' => 0xEB4D3D,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
