<?php

declare(strict_types=1);

// MiFlora
$setting = [
    'Moisture' => [
        'name'      => 'Feuchtigkeit',
        'position'  => 1,
        'doArchive' => true,
    ],
    'Fertility' => [
        'name'      => 'Fruchtbarkeit',
        'position'  => 2,
        'doArchive' => true,
    ],
    'Temperature' => [
        'name'      => 'Temperatur',
        'position'  => 3,
        'doArchive' => true,
    ],
    'Illuminance' => [
        'name'      => 'Beleuchtungsstärke',
        'position'  => 4,
        'doArchive' => true,
    ],
    'Battery' => [
        'name'      => 'Batterie',
        'position'  => 5,
        'doArchive' => true,
    ],
    'RSSI' => [
        'position'      => 6,
        'customProfile' => 'M2T.RSSI',
        'doArchive'     => true,
    ],
    'Time' => [
        'name'     => 'Letzte Sensor Aktualisierung',
        'position' => 9,
    ],
    'min_soil_moist' => [
        'name'     => 'Bodenfeuchtigkeit min.',
        'position' => 20,
    ],
    'max_soil_moist' => [
        'name'     => 'Bodenfeuchtigkeit max.',
        'position' => 21,
    ],
    'min_env_humid' => [
        'name'     => 'Luftfeuchtigkeit min.',
        'position' => 22,
    ],
    'max_env_humid' => [
        'name'     => 'Luftfeuchtigkeit max.',
        'position' => 23,
    ],
    'min_temp' => [
        'name'     => 'Temperatur min.',
        'position' => 24,
    ],
    'max_temp' => [
        'name'     => 'Temperatur max.',
        'position' => 25,
    ],
    'min_light_mmol' => [
        'name'     => 'Helligkeit min. (mmol)',
        'position' => 26,
    ],
    'max_light_mmol' => [
        'name'     => 'Helligkeit max. (mmol)',
        'position' => 27,
    ],
    'min_light_lux' => [
        'name'     => 'Helligkeit min. (Lx)',
        'position' => 28,
    ],
    'max_light_lux' => [
        'name'     => 'Helligkeit max. (Lx)',
        'position' => 29,
    ],
    'min_soil_ec' => [
        'name'     => 'Bodenleitfähigkeit min.',
        'position' => 30,
    ],
    'max_soil_ec' => [
        'name'     => 'Bodenleitfähigkeit max.',
        'position' => 31,
    ],
    'HumidityHint' => [
        'name'     => 'Bodenfeuchtigkeit Hinweis',
        'position' => 40,
    ],
    'TemperatureHint' => [
        'name'     => 'Temperatur Hinweis',
        'position' => 41,
    ],
    'IlluminanceHint' => [
        'name'     => 'Helligkeit (lx) Hinweis',
        'position' => 42,
    ],
    'DLIHint' => [
        'name'     => 'tgl. Lichtmenge (mmol) Hinweis',
        'position' => 43,
    ],
    'FertilizeHint' => [
        'name'     => 'Bodenleitfähigkeit Hinweis',
        'position' => 44,
    ],
];

echo json_encode($setting);
