<?php

declare(strict_types=1);

require_once IPS_GetScriptFile(MapLocalConstant('HELPER_GLOBAL'));

HM_ThermoSetWindowState(IPS_GetParent($_IPS['VARIABLE']), $_IPS['VALUE']);
