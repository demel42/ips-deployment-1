<?php

declare(strict_types=1);

// Aeotec Leckage-Melder (Water Sensor 7 Pro)
$setting = [
    'Notification05Variable' => [
        'name'      => 'Benachrichtigung (Wasseralarm)',
        'position'  => 1,
        'doArchive' => true,
    ],
    'Notification05Data' => [
        'name'      => 'Zusätzliche Informationen (Wasseralarm)',
        'position'  => 2,
        'doArchive' => true,
    ],
    'SensorBinary06Variable' => [
        'name'          => 'Binärsensor (Wasser)',
        'position'      => 3,
        'customProfile' => '~Alert',
        'doArchive'     => true,
    ],

    'SensorMultilevel01Variable' => [
        'name'      => 'Sensor Multilevel (Lufttemperatur)',
        'position'  => 4,
        'doArchive' => true,
    ],
    'SensorMultilevel05Variable' => [
        'name'      => 'Sensor Multilevel (Luftfeuchtigkeit)',
        'position'  => 5,
        'doArchive' => true,
    ],

    'Notification07Variable' => [
        'name'      => 'Benachrichtigung (Zuhause Sicherheit)',
        'position'  => 10,
    ],
    'Notification07Data' => [
        'name'      => 'Zusätzliche Informationen (Zuhause Sicherheit)',
        'position'  => 11,
    ],

    'Notification08Variable' => [
        'name'     => 'Benachrichtigung (Energiemanagement)',
        'position' => 20,
    ],
    'BatteryVariable' => [
        'name'      => 'Batterie',
        'position'  => 21,
        'doArchive' => true,
    ],
    'BatteryLowVariable' => [
        'name'      => 'Batteriestatus',
        'position'  => 22,
        'doArchive' => true,
    ],
];

echo json_encode($setting);
