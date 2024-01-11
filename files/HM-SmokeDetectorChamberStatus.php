<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'HM.SmokeDetectorChamberStatus',
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
            'Name'  => 'in Ordnung',
            'Icon'  => '',
            'Color' => 0x64C466,
        ],
        1 => [
            'Value' => true,
            'Name'  => 'verschmutzt',
            'Icon'  => '',
            'Color' => 0xEE0000,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
