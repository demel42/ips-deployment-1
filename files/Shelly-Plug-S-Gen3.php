<?php

declare(strict_types=1);

// Shelly Plug S Gen3
$setting = [
    'Reachable' => [
        'name'     => 'Status',
        'position' => 1,
    ],
    'State' => [
        'name'      => 'Zustand',
        'position'  => 11,
        'doArchive' => true,
    ],
    'Voltage' => [
        'name'     => 'Spannung',
        'position' => 12,
    ],
    'Current' => [
        'name'      => 'Strom',
        'position'  => 13,
        'doArchive' => true,
    ],
    'Power' => [
        'name'      => 'Leistung',
        'position'  => 14,
        'doArchive' => true,
    ],
    'TotalEnergy' => [
        'name'            => 'Energie',
        'position'        => 15,
        'doArchive'       => true,
        'aggregationType' => 1,
        'ignoreZeros'     => true,
    ],
];

echo json_encode($setting);
