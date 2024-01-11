<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.Energy_AnnualConsumption',
    'ProfileType'  => VARIABLETYPE_FLOAT,
    'Icon'         => 'Electricity',
    'Prefix'       => '',
    'Suffix'       => ' kWh',
    'MinValue'     => 0.0,
    'MaxValue'     => 0.0,
    'StepSize'     => 0.0,
    'Digits'       => 0,
    'Associations' => [
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
