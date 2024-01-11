<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.iPhone-Ort',
    'ProfileType'  => VARIABLETYPE_BOOLEAN,
    'Icon'         => '',
    'Prefix'       => '',
    'Suffix'       => '',
    'MinValue'     => 0.0,
    'MaxValue'     => 0.0,
    'StepSize'     => 0.0,
    'Digits'       => 0,
    'Associations' => [
        0 => [
            'Value' => false,
            'Name'  => 'unterwegs',
            'Icon'  => '',
            'Color' => -1,
        ],
        1 => [
            'Value' => true,
            'Name'  => 'zuhause',
            'Icon'  => '',
            'Color' => -1,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
