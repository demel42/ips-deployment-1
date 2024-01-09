<?php

declare(strict_types=1);

// Fibaro CO-Sensor (FGCD-001)
$setting = [
    'SensorMultilevel28Variable' => [
        'name'          => 'Sensor Multilevel (CO Konzentration)',
        'position'      => 1,
        'customProfile' => 'Local.ppm',
        'doArchive'     => true,
    ],
    'SensorMultilevel01Variable' => [
        'name'      => 'Sensor Multilevel (Lufttemperatur)',
        'position'  => 2,
        'doArchive' => true,
    ],

    'SensorAlarm00Variable' => [
        'name'          => 'Sensoralarm (Generell)',
        'position'      => 100,
        'customProfile' => '~Alert',
        'doArchive'     => true,
    ],

    'SensorAlarm02Variable' => [
        'name'          => 'Sensoralarm (CO)',
        'position'      => 120,
        'customProfile' => '~Alert',
        'doArchive'     => true,
    ],
    'Notification02Variable' => [
        'name'     => 'Benachrichtigung (CO Alarm)',
        'position' => 121,
    ],

    'SensorAlarm04Variable' => [
        'name'          => 'Sensoralarm (Hitze)',
        'position'      => 140,
        'customProfile' => '~Alert',
        'doArchive'     => true,
    ],

    'Notification04Variable' => [
        'name'     => 'Benachrichtigung (Hitze Alarm)',
        'position' => 141,
    ],

    'Notification07Variable' => [
        'name'     => 'Benachrichtigung (Zuhause Sicherheit)',
        'position' => 170,
    ],
    'Notification07Data' => [
        'name'     => 'Zusätzliche Informationen (Zuhause Sicherheit)',
        'position' => 171,
    ],

    'Notification08Variable' => [
        'name'      => 'Benachrichtigung (Energiemanagement)',
        'position'  => 180,
        'doArchive' => true,
    ],
    'BatteryVariable' => [
        'name'      => 'Batterie',
        'position'  => 185,
        'doArchive' => true,
    ],
    'BatteryLowVariable' => [
        'name'      => 'Batteriestatus',
        'position'  => 186,
        'doArchive' => true,
    ],

    'Notification09Variable' => [
        'name'     => 'Benachrichtigung (System)',
        'position' => 190,
    ],
];

echo json_encode($setting);
