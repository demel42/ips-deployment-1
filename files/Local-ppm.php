<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.ppm',
    'ProfileType'  => VARIABLETYPE_FLOAT,
    'Icon'         => 'Gauge',
    'Prefix'       => '',
    'Suffix'       => ' ppm',
    'MinValue'     => 0.0,
    'MaxValue'     => 0.0,
    'StepSize'     => 0.0,
    'Digits'       => 0,
    'Associations' => [
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
