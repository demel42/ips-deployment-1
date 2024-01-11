<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.Wifi_F',
    'ProfileType'  => VARIABLETYPE_FLOAT,
    'Icon'         => 'Intensity',
    'Prefix'       => '',
    'Suffix'       => ' dBm',
    'MinValue'     => 0.0,
    'MaxValue'     => 0.0,
    'StepSize'     => 0.0,
    'Digits'       => 0,
    'Associations' => [
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
