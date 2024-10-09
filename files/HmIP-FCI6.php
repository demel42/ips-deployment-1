<?php

declare(strict_types=1);

// HmIP-FCI6
$setting = [
    'name' => 'Kontakt',
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
        'name'       => 'Kontakt 1',
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
        'STATE'  => [
            'name'          => 'Zustand',
            'customProfile' => '~Window',
            'doArchive'     => true,
        ],
    ],
    2 => [
        'isMain'     => true,
        'isOptional' => true,
        'name'       => 'Kontakt 2',
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
        'STATE'  => [
            'name'          => 'Zustand',
            'customProfile' => '~Window',
            'doArchive'     => true,
        ],
    ],
    3 => [
        'isMain'     => true,
        'isOptional' => true,
        'name'       => 'Kontakt 3',
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
        'STATE'  => [
            'name'          => 'Zustand',
            'customProfile' => '~Window',
            'doArchive'     => true,
        ],
    ],
    4 => [
        'isMain'     => true,
        'isOptional' => true,
        'name'       => 'Kontakt 4',
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
        'STATE'  => [
            'name'          => 'Zustand',
            'customProfile' => '~Window',
            'doArchive'     => true,
        ],
    ],
    5 => [
        'isMain'     => true,
        'isOptional' => true,
        'name'       => 'Kontakt 5',
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
        'STATE'  => [
            'name'          => 'Zustand',
            'customProfile' => '~Window',
            'doArchive'     => true,
        ],
    ],
    6 => [
        'isMain'     => true,
        'isOptional' => true,
        'name'       => 'Kontakt 6',
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
        'STATE'  => [
            'name'          => 'Zustand',
            'customProfile' => '~Window',
            'doArchive'     => true,
        ],
    ],
];

echo json_encode($setting);
