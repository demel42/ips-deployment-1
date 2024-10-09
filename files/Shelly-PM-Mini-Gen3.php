<?php

declare(strict_types=1);

// Shelly PM Mini Gen3
$setting = [
    'Reachable' => [
        'name'     => 'Status',
        'position' => 1,
    ],
    'Voltage' => [
        'name'     => 'Spannung',
        'position' => 21,
    ],
    'Current' => [
        'name'      => 'Strom',
        'position'  => 22,
        'doArchive' => true,
    ],
    'Power' => [
        'name'      => 'Leistung',
        'position'  => 23,
        'doArchive' => true,
    ],
    'TotalEnergy' => [
        'name'            => 'Energie',
        'position'        => 24,
        'doArchive'       => true,
        'aggregationType' => 1,
        'ignoreZeros'     => true,
    ],
    'Frequency' => [
        'name'     => 'Frequenz',
        'position' => 25,
    ],
];

echo json_encode($setting);
