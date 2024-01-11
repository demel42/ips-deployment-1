<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.AnAus',
    'ProfileType'  => VARIABLETYPE_BOOLEAN,
    'Icon'         => 'Power',
    'Prefix'       => '',
    'Suffix'       => '',
    'MinValue'     => 0.0,
    'MaxValue'     => 0.0,
    'StepSize'     => 0.0,
    'Digits'       => 0,
    'Associations' => [
        0 => [
            'Value' => false,
            'Name'  => 'Aus',
            'Icon'  => '',
            'Color' => -1,
        ],
        1 => [
            'Value' => true,
            'Name'  => 'An',
            'Icon'  => '',
            'Color' => -1,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
