<?php

declare(strict_types=1);

$target = IPS_GetParent($_IPS['VARIABLE']);
switch ($_IPS['VALUE']) {
    case 0:
        $r = @HM_WriteValueBoolean($target, 'AUTO_MODE', true);
        if ($r == false) {
            echo __FILE__ . ': HM_WriteValueBoolean(' . $target . ', \'AUTO_MODE\', true) failed' . PHP_EOL;
        }
        break;
    case 1:
        $f = GetValueFloat(IPS_GetObjectIDByIdent('SET_TEMPERATURE', $target));
        $r = @HM_WriteValueFloat($target, 'MANU_MODE', $f);
        if ($r == false) {
            echo __FILE__ . ': HM_WriteValueFloat(' . $target . ', \'MANU_MODE\', ' . $f . ') failed' . PHP_EOL;
        }
        break;
    case 2:
        //'PARTY_MODE_SUBMIT' fehlt noch
        break;
    case 3:
        $r = @HM_WriteValueBoolean($target, 'BOOST_MODE', true);
        if ($r == false) {
            echo __FILE__ . ': HM_WriteValueBoolean(' . $target . ', \'BOOST_MODE\', true) failed' . PHP_EOL;
        }
        break;
}
