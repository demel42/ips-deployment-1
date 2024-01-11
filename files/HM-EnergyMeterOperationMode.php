<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'HM.EnergyMeterOperationMode',
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
            'Name'  => 'unbekannt',
            'Icon'  => '',
            'Color' => -1,
        ],
        1 => [
            'Value' => 1.0,
            'Name'  => 'Gas',
            'Icon'  => '',
            'Color' => -1,
        ],
        2 => [
            'Value' => 2.0,
            'Name'  => 'LED',
            'Icon'  => '',
            'Color' => -1,
        ],
        3 => [
            'Value' => 3.0,
            'Name'  => 'IEC',
            'Icon'  => '',
            'Color' => -1,
        ],
        4 => [
            'Value' => 4.0,
            'Name'  => 'IEC/SML',
            'Icon'  => '',
            'Color' => -1,
        ],
        5 => [
            'Value' => 5.0,
            'Name'  => 'IEC/SML WH',
            'Icon'  => '',
            'Color' => -1,
        ],
        6 => [
            'Value' => 6.0,
            'Name'  => 'IEC/D0 Modus A',
            'Icon'  => '',
            'Color' => -1,
        ],
        7 => [
            'Value' => 7.0,
            'Name'  => 'IEC/D0 Modus B',
            'Icon'  => '',
            'Color' => -1,
        ],
        8 => [
            'Value' => 8.0,
            'Name'  => 'IEC/D0 Modus C',
            'Icon'  => '',
            'Color' => -1,
        ],
        9 => [
            'Value' => 9.0,
            'Name'  => 'IEC/D0 Modus D',
            'Icon'  => '',
            'Color' => -1,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
