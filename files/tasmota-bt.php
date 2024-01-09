<?php

declare(strict_types=1);

// TasmotaBT
$setting = [
    'Tasmota_POWER' => [
        'name'     => 'POWER',
        'position' => 1,
        'isHidden' => true,
    ],
    'Tasmota_DeviceStatus' => [
        'name'     => 'Status',
        'position' => 20,
    ],
    'Tasmota_Uptime' => [
        'name'     => 'Uptime',
        'position' => 21,
    ],
    'Tasmota_LoadAvg' => [
        'name'          => 'LoadAvg',
        'position'      => 22,
        'isHidden'      => true,
        'customProfile' => 'Local.Percent',
    ],
    'Tasmota_Sleep' => [
        'name'     => 'Sleep',
        'position' => 23,
        'isHidden' => true,
    ],
    'Tasmota_SleepMode' => [
        'name'     => 'SleepMode',
        'position' => 24,
        'isHidden' => true,
    ],
    'Tasmota_Wifi_SSId' => [
        'name'     => 'SSId',
        'position' => 30,
        'isHidden' => true,
    ],
    'Tasmota_Wifi_BSSId' => [
        'name'     => 'BSSId',
        'position' => 31,
        'isHidden' => true,
    ],
    'Tasmota_Wifi_Channel' => [
        'name'     => 'Channel',
        'position' => 32,
        'isHidden' => true,
    ],
    'Tasmota_RSSI' => [
        'name'          => 'RSSI',
        'position'      => 33,
        'isHidden'      => true,
        'customProfile' => 'Local.Percent_F',
    ],
    'Tasmota_Signal' => [
        'name'          => 'Signal',
        'position'      => 34,
        'customProfile' => 'Local.Wifi_F',
        'doArchive'     => true,
    ],
    'Tasmota_Hostname' => [
        'name'     => 'Hostname',
        'position' => 35,
    ],
    'Tasmota_IPAddress' => [
        'name'     => 'IPAddress',
        'position' => 36,
    ],
];

echo json_encode($setting);
