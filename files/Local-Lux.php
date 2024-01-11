<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.Lux',
    'ProfileType'  => VARIABLETYPE_FLOAT,
    'Icon'         => 'Sun',
    'Prefix'       => '',
    'Suffix'       => ' lx',
    'MinValue'     => 0.0,
    'MaxValue'     => 0.0,
    'StepSize'     => 1.0,
    'Digits'       => 0,
    'Associations' => [
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
