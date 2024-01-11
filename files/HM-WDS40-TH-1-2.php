<?php

declare(strict_types=1);

// HM-WDS40-TH-1-2
$setting = [
    'name' => 'Raumklima',
    0      => [
        'LOWBAT' => [
            'name'      => 'Batterie',
            'doArchive' => true,
        ],
        'RSSI_DEVICE' => [
            'doArchive' => true,
        ],
        'RSSI_PEER' => [
            'doArchive' => true,
        ],
        'STICKY_UNREACH' => [
            'isHidden' => true,
        ],
    ],
    1 => [
        'isMain'   => true,
        'HUMIDITY' => [
            'name'      => 'Luftfeuchte',
            'doArchive' => true,
        ],
        'TEMPERATURE' => [
            'name'      => 'Temperatur',
            'doArchive' => true,
        ],
    ],
];

echo json_encode($setting);