<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.Minuten_5',
    'ProfileType'  => VARIABLETYPE_INTEGER,
    'Icon'         => 'Clock',
    'Prefix'       => '',
    'Suffix'       => ' m',
    'MinValue'     => 0.0,
    'MaxValue'     => 60.0,
    'StepSize'     => 5.0,
    'Digits'       => 0,
    'Associations' => [
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
