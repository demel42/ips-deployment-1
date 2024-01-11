<?php

declare(strict_types=1);

// HmIP-SMO
$setting = [
    'name' => 'Bewegungsmelder',
    0      => [
        'DUTY_CYCLE' => [
            'doArchive' => true,
        ],
        'INSTALL_TEST' => [
            'isHidden' => true,
        ],
        'LOW_BAT' => [
            'name'          => 'Batterie',
            'customProfile' => '~Battery',
            'doArchive'     => true,
        ],
        'OPERATING_VOLTAGE' => [
            'name'          => 'Versorgungsspannung',
            'customProfile' => '~Volt',
            'doArchive'     => true,
        ],
        'OPERATING_VOLTAGE_STATUS' => [
            'isHidden' => true,
        ],
        'RSSI_DEVICE' => [
            'doArchive' => true,
        ],
        'RSSI_PEER' => [
            'doArchive' => true,
        ],
        'UPDATE_PENDING' => [
            'isHidden' => true,
        ],
    ],
    1 => [
        'isMain'               => true,
        'CURRENT_ILLUMINATION' => [
            'isHidden' => true,
        ],
        'CURRENT_ILLUMINATION_STATUS' => [
            'isHidden' => true,
        ],
        'ILLUMINATION' => [
            'name'          => 'Helligkeit',
            'doArchive'     => true,
        ],
        'ILLUMINATION_STATUS' => [
            'isHidden' => true,
        ],
        'MOTION' => [
            'name'          => 'Bewegung',
            'doArchive'     => true,
        ],
        'MOTION_DETECTION_ACTIVE' => [
            'isHidden' => true,
        ],
    ],
];

echo json_encode($setting);
