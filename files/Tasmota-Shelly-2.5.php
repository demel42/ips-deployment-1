<?php

declare(strict_types=1);

// Tasmota Shelly 2.5
$setting =
[
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
    'Tasmota_POWER1' => [
        'name'      => 'Zustand Relais 1',
        'position'  => 10,
        'doArchive' => true,
    ],
    'Tasmota_POWCurrent0' => [
        'name'          => 'Strom 1',
        'position'      => 11,
        'customProfile' => 'Tasmota.ApparentCurrent',
        'doArchive'     => true,
    ],
    'Tasmota_POWPower0' => [
        'name'      => 'Leistung 1',
        'position'  => 12,
        'doArchive' => true,
    ],
    'Tasmota_POWReactivePower0' => [
        'name'     => 'Blindleistung 1',
        'position' => 13,
        'isHidden' => true,
    ],
    'Tasmota_POWApparentPower0' => [
        'name'     => 'Scheinleistung 1',
        'position' => 14,
        'isHidden' => true,
    ],
    'Tasmota_POWFactor0' => [
        'name'     => 'Faktor 1',
        'position' => 15,
        'isHidden' => true,
    ],
    'Tasmota_POWER2' => [
        'name'      => 'Zustand Relais 2',
        'position'  => 20,
        'doArchive' => true,
    ],
    'Tasmota_POWCurrent1' => [
        'name'          => 'Strom 2',
        'position'      => 21,
        'customProfile' => 'Tasmota.ApparentCurrent',
        'doArchive'     => true,
    ],
    'Tasmota_POWPower1' => [
        'name'      => 'Leistung 2',
        'position'  => 22,
        'doArchive' => true,
    ],
    'Tasmota_POWReactivePower1' => [
        'name'     => 'Blindleistung 2',
        'position' => 23,
        'isHidden' => true,
    ],
    'Tasmota_POWApparentPower1' => [
        'name'     => 'Scheinleistung 2',
        'position' => 24,
        'isHidden' => true,
    ],
    'Tasmota_POWFactor1' => [
        'name'     => 'Faktor 2',
        'position' => 25,
        'isHidden' => true,
    ],

    'Tasmota_POWVoltage' => [
        'name'      => 'Spannung',
        'position'  => 30,
        'doArchive' => true,
    ],
    'Tasmota_Frequency' => [
        'name'          => 'Frequenz',
        'position'      => 31,
        'doArchive'     => true,
    ],
    'Tasmota_PowerOnState' => [
        'name'      => 'Zustand beim Einschalten',
        'position'  => 32,
        'doArchive' => true,
    ],
    'Tasmota_POWTotal' => [
        'name'            => 'Gesamter Verbrauch',
        'position'        => 35,
        'doArchive'       => true,
        'aggregationType' => 1,
        'ignoreZeros'     => true,
    ],
    'Tasmota_POWToday' => [
        'name'     => 'Verbrauch heute',
        'position' => 36,
    ],
    'Tasmota_POWYesterday' => [
        'name'     => 'Verbrauch gestern',
        'position' => 37,
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
    'Tasmota_Switch1' => [
        'name'     => 'Switch 1',
        'position' => 54,
        'isHidden' => true,
    ],
    'Tasmota_Switch2' => [
        'name'     => 'Switch 2',
        'position' => 55,
        'isHidden' => true,
    ],
    'Tasmota_ANALOG_Temperature' => [
        'name'     => 'Temperatur',
        'position' => 56,
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