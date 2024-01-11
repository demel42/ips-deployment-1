<?php

declare(strict_types=1);

// HmIP-HAP
$setting = [
    'name' => 'Homematic Accesspoint',
    0      => [
        'isMain'              => true,
        'CARRIER_SENSE_LEVEL' => [
            'doArchive'     => true,
            'customProfile' => 'Local.Percent_F',
        ],
        'CONFIG_PENDING' => [
            'doArchive' => true,
        ],
        'DUTY_CYCLE' => [
            'doArchive' => true,
        ],
        'DUTY_CYCLE_LEVEL' => [
            'doArchive'     => true,
            'customProfile' => 'Local.Percent_F',
        ],
        'INSTALL_TEST' => [
            'isHidden'      => true,
            'disableAction' => true,
        ],
        'IP_ADDRESS' => [
            'isHidden' => true,
        ],
        'UNREACH' => [
            'doArchive' => true,
        ],
    ],
];

echo json_encode($setting);