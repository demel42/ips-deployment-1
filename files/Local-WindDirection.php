<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.WindDirection',
    'ProfileType'  => VARIABLETYPE_FLOAT,
    'Icon'         => 'WindDirection',
    'Prefix'       => '',
    'Suffix'       => '°',
    'MinValue'     => 0.0,
    'MaxValue'     => 360.0,
    'StepSize'     => 30.0,
    'Digits'       => 0,
    'Associations' => [
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
