<?php

declare(strict_types=1);

// HmIP-SWD
$setting = [
    'name' => 'Wassersensor',
    0      => [
        'DUTY_CYCLE' => [
            'doArchive' => true,
        ],
        'ERROR_CODE' => [
            'isHidden' => true,
        ],
        'ERROR_NON_FLAT_POSITIONING' => [
            'name'          => 'Position fehlerhaft',
            'customProfile' => 'Local.JaNein',
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
        'UPDATE_PENDING' => [
            'isHidden' => true,
        ],
    ],
    1 => [
        'ALARMSTATE' => [
            'isHidden' => true,
        ],
        'MOISTURE_DETECTED' => [
            'name'          => 'Feuchtigkeit erkannt',
            'customProfile' => 'Local.JaNein',
        ],
        'WATERLEVEL_DETECTED' => [
            'name'          => 'Wasserstand erkannt',
            'customProfile' => 'Local.JaNein',
            'doArchive'     => true,
        ],
        'isMain' => true,
    ],
];

echo json_encode($setting);
