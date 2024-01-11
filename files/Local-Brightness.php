<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.Brightness',
    'ProfileType'  => VARIABLETYPE_FLOAT,
    'Icon'         => 'Light',
    'Prefix'       => '',
    'Suffix'       => ' %',
    'MinValue'     => 0.0,
    'MaxValue'     => 1.0,
    'StepSize'     => 0.05,
    'Digits'       => 1,
    'Associations' => [
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
