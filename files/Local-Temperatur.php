<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.Temperatur',
    'ProfileType'  => VARIABLETYPE_FLOAT,
    'Icon'         => 'Temperature',
    'Prefix'       => '',
    'Suffix'       => ' °C',
    'MinValue'     => -10.0,
    'MaxValue'     => 30.0,
    'StepSize'     => 0.5,
    'Digits'       => 1,
    'Associations' => [
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
