<?php

declare(strict_types=1);

$target = IPS_GetParent($_IPS['VARIABLE']);
$r = @HM_WriteValueInteger($target, 'SMOKE_DETECTOR_COMMAND', $_IPS['VALUE']);