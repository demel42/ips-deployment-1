<?php

declare(strict_types=1);

// HmIP-WRC2
$setting = [
    'name' => 'Taster',
    0      => [
        'DUTY_CYCLE' => [
            'doArchive' => true,
        ],
        'INSTALL_TEST' => [
            'isHidden' => true,
        ],
        'OPERATING_VOLTAGE' => [
            'isHidden' => true,
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
        'isMain'     => true,
        'isOptional' => true,
        'name'       => 'Taster unten',
        'PRESS_LONG' => [
            'isHidden' => true,
        ],
        'PRESS_LONG_RELEASE' => [
            'isHidden' => true,
        ],
        'PRESS_LONG_START' => [
            'isHidden' => true,
        ],
        'PRESS_SHORT' => [
            'isHidden' => true,
        ],
    ],
    2 => [
        'isMain'     => true,
        'isOptional' => true,
        'name'       => 'Taster oben',
        'PRESS_LONG' => [
            'isHidden' => true,
        ],
        'PRESS_LONG_RELEASE' => [
            'isHidden' => true,
        ],
        'PRESS_LONG_START' => [
            'isHidden' => true,
        ],
        'PRESS_SHORT' => [
            'isHidden' => true,
        ],
    ],
];

echo json_encode($setting);
