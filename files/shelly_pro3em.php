<?php

declare(strict_types=1);

// Shelly Pro3EM
$setting = [
    'Reachable' => [
        'name'     => 'Status',
        'position' => 1,
    ],
    'totalCurrent' => [
        'name'      => 'Gesamt Strom',
        'position'  => 11,
        'doArchive' => true,
    ],
    'totalActPower' => [
        'name'      => 'Gesamt Wirkleistung',
        'position'  => 13,
        'doArchive' => true,
    ],
    'totalAprtPower' => [
        'name'     => 'Gesamt Scheinleistung',
        'position' => 14,
    ],
    'totalActEnergy' => [
        'name'            => 'Gesamt Bezug',
        'position'        => 16,
        'doArchive'       => true,
        'aggregationType' => 1,
        'ignoreZeros'     => true,
    ],
    'totalActRetEnergy' => [
        'name'            => 'Gesamt Einspeisung',
        'position'        => 17,
        'doArchive'       => true,
        'aggregationType' => 1,
        'ignoreZeros'     => true,
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
        'name'     => 'Phase A Bezug',
        'position' => 26,
    ],
    'aTotalActRetEnergy' => [
        'name'     => 'Phase A Einspeisung',
        'position' => 27,
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
        'name'     => 'Phase B Bezug',
        'position' => 36,
    ],
    'bTotalActRetEnergy' => [
        'name'     => 'Phase B Einspeisung',
        'position' => 37,
    ],
    'cVoltage' => [
        'name'     => 'Phase C Spannung',
        'position' => 41,
    ],
    'cCurrent' => [
        'name'      => 'Phase C Strom',
        'position'  => 42,
        'doArchive' => true,
    ],
    'cActPower' => [
        'name'      => 'Phase C Wirkleistung',
        'position'  => 43,
        'doArchive' => true,
    ],
    'cAprtPower' => [
        'name'     => 'Phase C Scheinleistung',
        'position' => 44,
    ],
    'cPF' => [
        'name'     => 'Phase C Leistungsfaktor',
        'position' => 45,
    ],
    'cTotalActEnergy' => [
        'name'     => 'Phase C Bezug',
        'position' => 46,
    ],
    'cTotalActRetEnergy' => [
        'name'     => 'Phase C Einspeisung',
        'position' => 47,
    ],
];

echo json_encode($setting);
