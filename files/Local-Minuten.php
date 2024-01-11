<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.Minuten',
    'ProfileType'  => VARIABLETYPE_INTEGER,
    'Icon'         => 'Clock',
    'Prefix'       => '',
    'Suffix'       => ' m',
    'MinValue'     => 0.0,
    'MaxValue'     => 0.0,
    'StepSize'     => 0.0,
    'Digits'       => 0,
    'Associations' => [
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
