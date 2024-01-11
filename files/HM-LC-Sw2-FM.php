<?php

declare(strict_types=1);

// HM-LC-Sw2-FM
$setting = [
    'name' => 'Doppelschalter',
    0      => [
        'AES_KEY' => [
            'isHidden' => true,
        ],
        'DUTYCYCLE' => [
            'doArchive' => true,
        ],
        'LOWBAT' => [
            'name' => 'Batterie',
        ],
        'STICKY_UNREACH' => [
            'isHidden' => true,
        ],
    ],
    1 => [
        'name'    => 'Schalter 1',
        'INHIBIT' => [
            'isHidden' => true,
        ],
        'STATE' => [
            'name' => 'Zustand',
        ],
        'WORKING' => [
            'isHidden' => true,
        ],
        'isMain' => true,
    ],
    2 => [
        'name'    => 'Schalter 2',
        'INHIBIT' => [
            'isHidden' => true,
        ],
        'STATE' => [
            'name'      => 'Zustand',
            'doArchive' => true,
        ],
        'WORKING' => [
            'isHidden' => true,
        ],
        'isMain' => true,
    ],
];

echo json_encode($setting);
