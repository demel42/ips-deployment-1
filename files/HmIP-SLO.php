<?php

declare(strict_types=1);

// HmIP-SLO
$setting = [
    'name' => 'Lichtsensor',
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
        'AVERAGE_ILLUMINATION' => [
            'name'          => 'Durchschnittliche Helligkeit',
            'customProfile' => 'Local.Lux',
        ],
        'AVERAGE_ILLUMINATION_STATUS' => [
            'isHidden' => true,
        ],
        'CURRENT_ILLUMINATION' => [
            'name'          => 'Aktuelle Helligkeit',
            'customProfile' => 'Local.Lux',
            'doArchive'     => true,
        ],
        'CURRENT_ILLUMINATION_STATUS' => [
            'isHidden' => true,
        ],
        'HIGHEST_ILLUMINATION' => [
            'name'          => 'Maximale Helligkeit',
            'customProfile' => 'Local.Lux',
        ],
        'HIGHEST_ILLUMINATION_STATUS' => [
            'isHidden' => true,
        ],
        'LOWEST_ILLUMINATION' => [
            'name'          => 'Minimale Helligkeit',
            'customProfile' => 'Local.Lux',
        ],
        'LOWEST_ILLUMINATION_STATUS' => [
            'isHidden' => true,
        ],
        'isMain' => true,
    ],
];

echo json_encode($setting);
