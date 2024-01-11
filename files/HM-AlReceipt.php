<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'HM.AlReceipt',
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
            'Name'  => 'Quittieren',
            'Icon'  => '',
            'Color' => 0x00FF00,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
