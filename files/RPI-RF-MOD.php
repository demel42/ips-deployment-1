<?php

declare(strict_types=1);

// RPI-RF-MOD
$setting = [
    'name' => 'Homematic Funkmodul',
    0      => [
        'isMain'              => true,
        'CARRIER_SENSE_LEVEL' => [
            'doArchive'     => true,
            'customProfile' => 'Local.Percent_F',
        ],
        'DUTY_CYCLE_LEVEL' => [
            'doArchive'     => true,
            'customProfile' => 'Local.Percent_F',
        ],
        'INCLUSION_UNSUPPORTED_DEVICE' => [
            'isHidden' => true,
        ],
    ],
];

echo json_encode($setting);
