<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.RaumFeuchte',
    'ProfileType'  => VARIABLETYPE_FLOAT,
    'Icon'         => 'Drops',
    'Prefix'       => '',
    'Suffix'       => '',
    'MinValue'     => 0.0,
    'MaxValue'     => 100.0,
    'StepSize'     => 10.0,
    'Digits'       => 0,
    'Associations' => [
        0 => [
            'Value' => 10.0,
            'Name'  => '%.0f%%',
            'Icon'  => '',
            'Color' => -1,
        ],
        1 => [
            'Value' => 20.0,
            'Name'  => '%.0f%%',
            'Icon'  => '',
            'Color' => -1,
        ],
        2 => [
            'Value' => 30.0,
            'Name'  => '%.0f%%',
            'Icon'  => '',
            'Color' => -1,
        ],
        3 => [
            'Value' => 40.0,
            'Name'  => '%.0f%%',
            'Icon'  => '',
            'Color' => -1,
        ],
        4 => [
            'Value' => 50.0,
            'Name'  => '%.0f%%',
            'Icon'  => '',
            'Color' => -1,
        ],
        5 => [
            'Value' => 60.0,
            'Name'  => '%.0f%%',
            'Icon'  => '',
            'Color' => -1,
        ],
        6 => [
            'Value' => 70.0,
            'Name'  => '%.0f%%',
            'Icon'  => '',
            'Color' => -1,
        ],
        7 => [
            'Value' => 80.0,
            'Name'  => '%.0f%%',
            'Icon'  => '',
            'Color' => -1,
        ],
        8 => [
            'Value' => 90.0,
            'Name'  => '%.0f%%',
            'Icon'  => '',
            'Color' => -1,
        ],
        9 => [
            'Value' => 100.0,
            'Name'  => '%.0f%%',
            'Icon'  => '',
            'Color' => -1,
        ],
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
