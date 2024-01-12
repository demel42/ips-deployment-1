<?php

declare(strict_types=1);

$r = IPS_GetObject($_IPS['VARIABLE']);
$ident = $r['ObjectIdent'];
$target = $r['ParentID'];
$value = $_IPS['VALUE'];
$r = @HM_WriteValueInteger($target, $ident, $value);
if ($r == false) {
    echo __FILE__ . ': HM_WriteValueInteger(' . $target . ', \'' . $ident . '\', ' . $value . ') failed' . PHP_EOL;
}
