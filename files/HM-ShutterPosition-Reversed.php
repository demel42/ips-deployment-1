<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'HM.ShutterPosition.Reversed',
    'ProfileType'  => VARIABLETYPE_FLOAT,
    'Icon'         => 'Jalousie',
    'Prefix'       => '',
    'Suffix'       => ' %',
    'MinValue'     => 0.0,
    'MaxValue'     => 1.0,
    'StepSize'     => 0.1,
    'Digits'       => 0,
    'Associations' => [
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
