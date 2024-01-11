<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.GasCounter',
    'ProfileType'  => VARIABLETYPE_FLOAT,
    'Icon'         => '',
    'Prefix'       => '',
    'Suffix'       => ' m3',
    'MinValue'     => 0.0,
    'MaxValue'     => 0.0,
    'StepSize'     => 0.0,
    'Digits'       => 1,
    'Associations' => [
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
