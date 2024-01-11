<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.RaumTemperatur',
    'ProfileType'  => VARIABLETYPE_FLOAT,
    'Icon'         => 'Temperature',
    'Prefix'       => '',
    'Suffix'       => ' °C',
    'MinValue'     => 10.0,
    'MaxValue'     => 40.0,
    'StepSize'     => 1.0,
    'Digits'       => 0,
    'Associations' => [
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
