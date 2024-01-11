<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'HM.EnergyMeterCounterStatus',
    'ProfileType'  => VARIABLETYPE_INTEGER,
    'Icon'         => '',
    'Prefix'       => '',
    'Suffix'       => '',
    'MinValue'     => 0.0,
    'MaxValue'     => 0.0,
    'StepSize'     => 1.0,
    'Digits'       => 0,
    'Associations' => [
        0 => [
            'Value' => 0.0,
            'Name'  => 'normal',
            'Icon'  => '',
            'Color' => -1,
        ],
        1 => [
            'Value' => 1.0,
            'Name'  => 'unbekannt',
            'Icon'  => '',
            'Color' => -1,
        ],
        2 => [
            'Value' => 2.0,
            'Name'  => 'Überlauf',
            'Icon'  => '',
            'Color' => 0xEE0000,
        ],
        3 => [
            'Value' => 3.0,
            'Name'  => 'Unterlauf',
            'Icon'  => '',
            'Color' => 0xEE0000,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
