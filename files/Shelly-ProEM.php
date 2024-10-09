<?php

declare(strict_types=1);

// Shelly ProEM
$setting = [
    'Reachable' => [
        'name'     => 'Status',
        'position' => 1,
    ],
    'State' => [
        'name'     => 'Schaltausgang',
        'position' => 10,
    ],
    'aVoltage' => [
        'name'     => 'Phase A Spannung',
        'position' => 21,
    ],
    'aCurrent' => [
        'name'      => 'Phase A Strom',
        'position'  => 22,
        'doArchive' => true,
    ],
    'aActPower' => [
        'name'      => 'Phase A Wirkleistung',
        'position'  => 23,
        'doArchive' => true,
    ],
    'aAprtPower' => [
        'name'     => 'Phase A Scheinleistung',
        'position' => 24,
    ],
    'aPF' => [
        'name'     => 'Phase A Leistungsfaktor',
        'position' => 25,
    ],
    'aTotalActEnergy' => [
        'name'            => 'Phase A Bezug',
        'position'        => 26,
        'doArchive'       => true,
        'aggregationType' => 1,
        'ignoreZeros'     => true,
    ],
    'aTotalActRetEnergy' => [
        'name'            => 'Phase A Einspeisung',
        'position'        => 27,
        'doArchive'       => true,
        'aggregationType' => 1,
        'ignoreZeros'     => true,
    ],
    'bVoltage' => [
        'name'     => 'Phase B Spannung',
        'position' => 31,
    ],
    'bCurrent' => [
        'name'      => 'Phase B Strom',
        'position'  => 32,
        'doArchive' => true,
    ],
    'bActPower' => [
        'name'      => 'Phase B Wirkleistung',
        'position'  => 33,
        'doArchive' => true,
    ],
    'bAprtPower' => [
        'name'     => 'Phase B Scheinleistung',
        'position' => 34,
    ],
    'bPF' => [
        'name'     => 'Phase B Leistungsfaktor',
        'position' => 35,
    ],
    'bTotalActEnergy' => [
        'name'            => 'Phase B Bezug',
        'position'        => 36,
        'doArchive'       => true,
        'aggregationType' => 1,
        'ignoreZeros'     => true,
    ],
    'bTotalActRetEnergy' => [
        'name'            => 'Phase B Einspeisung',
        'position'        => 37,
        'doArchive'       => true,
        'aggregationType' => 1,
        'ignoreZeros'     => true,
    ],
];

echo json_encode($setting);
