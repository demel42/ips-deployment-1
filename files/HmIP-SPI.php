<?php

declare(strict_types=1);

// HmIP-SPI
$setting = [
    'name' => 'Präsenzmelder',
    0      => [
        'ERROR_CODE' => [
            'isHidden' => true,
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
        'SABOTAGE' => [
            'isHidden' => true,
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
            'isHidden' => true,
        ],
        'ILLUMINATION_STATUS' => [
            'isHidden' => true,
        ],
        'PRESENCE_DETECTION_ACTIVE' => [
            'name'          => 'Präsenzerkennung aktiv',
            'customProfile' => 'Local.JaNein',
        ],
        'PRESENCE_DETECTION_STATE' => [
            'name'          => 'Präsenz erkannt',
            'customProfile' => 'Local.JaNein',
        ],
    ],
];

echo json_encode($setting);
