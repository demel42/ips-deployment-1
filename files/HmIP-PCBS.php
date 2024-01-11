<?php

declare(strict_types=1);

// HmIP-PCBS
$setting = [
    'name' => 'Schaltaktor',
    0      => [
        'ACTUAL_TEMPERATURE' => [
            'isHidden'   => true,
            'isDisabled' => true,
        ],
        'ACTUAL_TEMPERATURE_STATUS' => [
            'isHidden'   => true,
            'isDisabled' => true,
        ],
        'DUTY_CYCLE' => [
            'doArchive' => true,
        ],
        'ERROR_CODE' => [
            'isHidden'   => true,
            'isDisabled' => true,
        ],
        'ERROR_OVERHEAT' => [
            'isHidden'   => true,
            'isDisabled' => true,
        ],
        'INSTALL_TEST' => [
            'isHidden'   => true,
            'isDisabled' => true,
        ],
        'OPERATING_VOLTAGE' => [
            'isHidden'   => true,
            'isDisabled' => true,
        ],
        'OPERATING_VOLTAGE_STATUS' => [
            'isHidden'   => true,
            'isDisabled' => true,
        ],
        'RSSI_DEVICE' => [
            'doArchive' => true,
        ],
        'RSSI_PEER' => [
            'doArchive' => true,
        ],
        'UPDATE_PENDING' => [
            'isHidden'   => true,
            'isDisabled' => true,
        ],
    ],
    3 => [
        'isMain'  => true,
        'PROCESS' => [
            'isHidden'   => true,
            'isDisabled' => true,
        ],
        'SECTION' => [
            'isHidden'   => true,
            'isDisabled' => true,
        ],
        'SECTION_STATUS' => [
            'isHidden'   => true,
            'isDisabled' => true,
        ],
        'STATE' => [
            'name'      => 'Zustand',
            'doArchive' => true,
        ],
    ],
];

echo json_encode($setting);