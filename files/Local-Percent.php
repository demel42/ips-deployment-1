<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.Percent',
    'ProfileType'  => VARIABLETYPE_INTEGER,
    'Icon'         => '',
    'Prefix'       => '',
    'Suffix'       => ' %',
    'MinValue'     => 0.0,
    'MaxValue'     => 100.0,
    'StepSize'     => 1.0,
    'Digits'       => 0,
    'Associations' => [
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
