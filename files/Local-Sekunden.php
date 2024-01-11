<?php

declare(strict_types=1);

$setting = [
    'ProfileName'  => 'Local.Sekunden',
    'ProfileType'  => VARIABLETYPE_INTEGER,
    'Icon'         => '',
    'Prefix'       => '',
    'Suffix'       => ' s',
    'MinValue'     => 0.0,
    'MaxValue'     => 0.0,
    'StepSize'     => 0.0,
    'Digits'       => 0,
    'Associations' => [
    ],
    'IsReadOnly' => false,
];

echo json_encode($setting);
