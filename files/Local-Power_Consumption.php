<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.Power_Consumption',
    'ProfileType'  => VARIABLETYPE_FLOAT,
    'Icon'         => 'Electricity',
    'Prefix'       => '',
    'Suffix'       => ' W',
    'MinValue'     => 0.0,
    'MaxValue'     => 0.0,
    'StepSize'     => 0.0,
    'Digits'       => 1,
    'Associations' => [
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
