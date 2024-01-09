<?php

declare(strict_types=1);

// HydrawiseZone
$setting = [
    'LastRun' => [
        'name'     => 'letzte Bewässerung',
        'position' => 1,
    ],
    'LastDuration' => [
        'name'     => 'Dauer der letzten Bewässerung',
        'position' => 2,
    ],
    'NextRun' => [
        'name'     => 'nächste Bewässerung',
        'position' => 3,
    ],
    'NextDuration' => [
        'name'     => 'Dauer der nächsten Bewässerung',
        'position' => 4,
    ],
    'TimeLeft' => [
        'name'     => 'verbleibende Zeit',
        'position' => 5,
        'isHidden' => true,
    ],
    'WaterUsage' => [
        'name'     => 'Wasserverbrauch',
        'position' => 6,
    ],
    'WaterFlowrate' => [
        'name'      => 'Wasser-Durchflussmenge',
        'position'  => 7,
        'doArchive' => true,
    ],
    'ZoneAction' => [
        'name'     => 'Bewässerung schalten',
        'position' => 8,
    ],
    'SuspendUntil' => [
        'name'     => 'Ausgesetzt bis Ende',
        'position' => 9,
    ],
    'SuspendAction' => [
        'name'     => 'Bewässerung aussetzen',
        'position' => 10,
    ],
    'DailyDuration' => [
        'name'      => 'Bewässerungsdauer (heute)',
        'position'  => 11,
        'doArchive' => true,
    ],
    'DailyWaterUsage' => [
        'name'      => 'Wasserverbrauch (heute)',
        'position'  => 12,
        'doArchive' => true,
    ],
    'Workflow' => [
        'name'     => 'aktueller Arbeitsfluss',
        'position' => 13,
    ],
    'Status' => [
        'name'      => 'Status der Zone',
        'position'  => 14,
        'doArchive' => true,
    ],
];

echo json_encode($setting);
