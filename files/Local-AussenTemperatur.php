<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.AussenTemperatur',
    'ProfileType'  => VARIABLETYPE_FLOAT,
    'Icon'         => 'Temperature',
    'Prefix'       => '',
    'Suffix'       => ' °C',
    'MinValue'     => 0.0,
    'MaxValue'     => 20.0,
    'StepSize'     => 1.0,
    'Digits'       => 0,
    'Associations' => [
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
