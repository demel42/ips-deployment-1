<?php

declare(strict_types=1);

// Shelly Plus2PM
$setting = [
    'Reachable' => [
        'name'     => 'Status',
        'position' => 1,
    ],
    'State0' => [
        'name'      => 'Zustand 1',
        'position'  => 11,
        'doArchive' => true,
    ],
    'Voltage0' => [
        'name'     => 'Spannung 1',
        'position' => 12,
    ],
    'Current0' => [
        'name'     => 'Strom 1',
        'position' => 13,
    ],
    'Power0' => [
        'name'      => 'Leistung 1',
        'position'  => 14,
        'doArchive' => true,
    ],
    'TotalEnergy0' => [
        'name'            => 'Gesamter Verbrauch 1',
        'position'        => 15,
        'doArchive'       => true,
        'aggregationType' => 1,
        'ignoreZeros'     => true,
    ],
    'State1' => [
        'name'      => 'Zustand 2',
        'position'  => 21,
        'doArchive' => true,
    ],
    'Voltage1' => [
        'name'     => 'Spannung 2',
        'position' => 22,
    ],
    'Current1' => [
        'name'     => 'Strom 2',
        'position' => 23,
    ],
    'Power1' => [
        'name'      => 'Leistung 2',
        'position'  => 24,
        'doArchive' => true,
    ],
    'TotalEnergy1' => [
        'name'            => 'Gesamter Verbrauch 2',
        'position'        => 25,
        'doArchive'       => true,
        'aggregationType' => 1,
        'ignoreZeros'     => true,
    ],
];

echo json_encode($setting);
