<?php

declare(strict_types=1);

$setting = [
    'Shelly_State' => [
        'name'     => 'Status',
        'position' => 1,
    ],
    'Shelly_Reachable' => [
        'name'     => 'Erreichbar',
        'position' => 2,
    ],
    'Shelly_Voltage0' => [
        'name'     => 'Phase A Spannung',
        'position' => 21,
    ],
    'Shelly_Current0' => [
        'name'     => 'Phase A Strom',
        'position' => 22,
    ],
    'Shelly_Power0' => [
        'name'      => 'Phase A Leistung',
        'position'  => 23,
        'doArchive' => true,
    ],
    'Shelly_PowerFactor0' => [
        'name'     => 'Phase A Leistungsfaktor',
        'position' => 24,
    ],
    'Shelly_Total0' => [
        'name'            => 'Phase A Gesamt Verbrauch',
        'position'        => 25,
        'doArchive'       => true,
        'aggregationType' => 1,
        'ignoreZeros'     => true,
    ],
    'Shelly_TotalReturned0' => [
        'name'     => 'Phase A Gesamt Einspeisung',
        'position' => 26,
    ],
    'Shelly_Voltage1' => [
        'name'     => 'Phase B Spannung',
        'position' => 31,
    ],
    'Shelly_Current1' => [
        'name'     => 'Phase B Strom',
        'position' => 32,
    ],
    'Shelly_Power1' => [
        'name'      => 'Phase B Leistung',
        'position'  => 33,
        'doArchive' => true,
    ],
    'Shelly_PowerFactor1' => [
        'name'     => 'Phase B Leistungsfaktor',
        'position' => 34,
    ],
    'Shelly_Total1' => [
        'name'            => 'Phase B Gesamt Verbrauch',
        'position'        => 35,
        'doArchive'       => true,
        'aggregationType' => 1,
        'ignoreZeros'     => true,
    ],
    'Shelly_TotalReturned1' => [
        'name'     => 'Phase B Gesamt Einspeisung',
        'position' => 36,
    ],
    'Shelly_Voltage2' => [
        'name'     => 'Phase C Spannung',
        'position' => 41,
    ],
    'Shelly_Current2' => [
        'name'     => 'Phase C Strom',
        'position' => 42,
    ],
    'Shelly_Power2' => [
        'name'      => 'Phase C Leistung',
        'position'  => 43,
        'doArchive' => true,
    ],
    'Shelly_PowerFactor2' => [
        'name'     => 'Phase C Leistungsfaktor',
        'position' => 44,
    ],
    'Shelly_Total2' => [
        'name'            => 'Phase C Gesamt Verbrauch',
        'position'        => 45,
        'doArchive'       => true,
        'aggregationType' => 1,
        'ignoreZeros'     => true,
    ],
    'Shelly_TotalReturned2' => [
        'name'     => 'Phase C Gesamt Einspeisung',
        'position' => 46,
    ],

    'Shelly_CurrentN' => [
        'name'     => 'Neutralleiter Strom',
        'position' => 51,
    ],
    'Shelly_IxsumN' => [
        'name'     => ' Neutralleiter RMS',
        'position' => 52,
    ],
];

echo json_encode($setting);
