<?php

declare(strict_types=1);

// Tasmota AISIRER AWP07L
$setting = [
    'Tasmota_DeviceStatus' => [
        'name'      => 'Status',
        'position'  => 1,
        'doArchive' => true,
    ],
    'Tasmota_Hostname' => [
        'name'     => 'Hostname',
        'position' => 2,
    ],
    'Tasmota_Module' => [
        'name'     => 'Modul',
        'position' => 3,
    ],
    'Tasmota_Version' => [
        'name'     => 'Version',
        'position' => 4,
    ],
    'Tasmota_POWER' => [
        'name'      => 'Zustand',
        'position'  => 10,
        'doArchive' => true,
    ],
    'Tasmota_POWVoltage' => [
        'name'      => 'Spannung',
        'position'  => 11,
        'doArchive' => true,
    ],
    'Tasmota_POWCurrent' => [
        'name'          => 'Strom',
        'position'      => 12,
        'customProfile' => 'Tasmota.ApparentCurrent',
        'doArchive'     => true,
    ],
    'Tasmota_POWPower' => [
        'name'      => 'Leistung',
        'position'  => 13,
        'doArchive' => true,
    ],
    'Tasmota_POWReactivePower' => [
        'name'     => 'Blindleistung',
        'position' => 14,
        'isHidden' => true,
    ],
    'Tasmota_POWApparentPower' => [
        'name'     => 'Scheinleistung',
        'position' => 15,
        'isHidden' => true,
    ],
    'Tasmota_POWFactor' => [
        'name'     => 'Faktor',
        'position' => 16,
        'isHidden' => true,
    ],
    'Tasmota_POWTotal' => [
        'name'            => 'Gesamter Verbrauch',
        'position'        => 17,
        'doArchive'       => true,
        'aggregationType' => 1,
        'ignoreZeros'     => true,
    ],
    'Tasmota_POWToday' => [
        'name'     => 'Verbrauch heute',
        'position' => 18,
    ],
    'Tasmota_POWYesterday' => [
        'name'     => 'Verbrauch gestern',
        'position' => 19,
    ],
    'Tasmota_PowerOnState' => [
        'name'      => 'Zustand beim Einschalten',
        'position'  => 30,
        'doArchive' => true,
    ],
    'Tasmota_Uptime' => [
        'name'     => 'Uptime',
        'position' => 50,
    ],
    'Tasmota_LoadAvg' => [
        'name'          => 'LoadAvg',
        'position'      => 51,
        'isHidden'      => true,
        'customProfile' => 'Local.Percent',
    ],
    'Tasmota_Sleep' => [
        'name'     => 'Sleep',
        'position' => 52,
        'isHidden' => true,
    ],
    'Tasmota_SleepMode' => [
        'name'     => 'SleepMode',
        'position' => 53,
        'isHidden' => true,
    ],
    'Tasmota_Wifi_SSId' => [
        'name'     => 'SSId',
        'position' => 60,
        'isHidden' => true,
    ],
    'Tasmota_Wifi_BSSId' => [
        'name'     => 'BSSId',
        'position' => 61,
        'isHidden' => true,
    ],
    'Tasmota_Wifi_Channel' => [
        'name'     => 'Channel',
        'position' => 62,
        'isHidden' => true,
    ],
    'Tasmota_RSSI' => [
        'name'          => 'RSSI',
        'position'      => 63,
        'isHidden'      => true,
        'customProfile' => 'Local.Percent_F',
    ],
    'Tasmota_Signal' => [
        'name'          => 'Signal',
        'position'      => 64,
        'customProfile' => 'Local.Wifi_F',
        'doArchive'     => true,
    ],
    'Tasmota_IPAddress' => [
        'name'     => 'IP-Adresse',
        'position' => 65,
        'isHidden' => true,
    ],
    'Tasmota_FallbackTopic' => [
        'name'     => 'MQTT Fallback Topic',
        'position' => 70,
        'isHidden' => true,
    ],
    'Tasmota_GroupTopic' => [
        'name'     => 'MQTT Group Topic',
        'position' => 71,
        'isHidden' => true,
    ],
];

echo json_encode($setting);
