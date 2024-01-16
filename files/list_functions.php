<?php

declare(strict_types=1);

//Exportiert alle IP-Symcon Funktionen mit einer Parameterliste
$instanceid = 0; //0 = Alle Funktionen, sonst Filter auf InstanzID
$fs = IPS_GetFunctionList($instanceid);
asort($fs);
$typestr = ['boolean', 'integer', 'float', 'string', 'variant', 'array'];
foreach ($fs as $f) {
    $f = IPS_GetFunction($f);
    echo sprintf('[%7s]', $typestr[$f['Result']['Type_']]) . ' - ' . $f['FunctionName'] . '(';
    $a = [];
    foreach ($f['Parameters'] as $p) {
        if (isset($p['Enumeration']) && count($p['Enumeration']) > 0) {
            $b = [];
            foreach ($p['Enumeration'] as $k => $v) {
                $b[] = $k . '=' . $v;
            }
            $type = 'integer/enum[' . implode(', ', $b) . ']';
        } else {
            $type = $typestr[$p['Type_']];
        }
        $a[] = $type . ' $' . $p['Description'];
    }
    echo implode(', ', $a) . ");\n";
}