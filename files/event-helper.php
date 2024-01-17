<?php

declare(strict_types=1);

require_once IPS_GetScriptFile(GetLocalConfig('GLOBAL_HELPER'));

function Event_CreateTrigger4Script(int $scrID, int $varID)
{
    if (IPS_ScriptExists($scrID) == false) {
        return false;
    }
    if (IPS_VariableExists($varID) == false) {
        return false;
    }

    $fnd = false;
    foreach (IPS_GetChildrenIDs($scrID) as $id) {
        if (IPS_EventExists($id) == false) {
            continue;
        }
        $evn = IPS_GetEvent($id);
        if ($evn['EventType'] == EVENTTYPE_TRIGGER && $evn['TriggerVariableID'] == $varID) {
            $fnd = true;
            break;
        }
    }
    if ($fnd == false) {
        $evnID = IPS_CreateEvent(EVENTTYPE_TRIGGER);
        IPS_SetEventTrigger($evnID, 1, $varID);
        IPS_SetParent($evnID, $scrID);
        IPS_SetEventActive($evnID, true);
        IPS_SetEventAction($evnID, '{7938A5A2-0981-5FE0-BE6C-8AA610D654EB}', []);
    }

    return $evnID;
}

function Event_CreateCyclic4Script(int $scrID, array $def)
{
    if (IPS_ScriptExists($scrID) == false) {
        return false;
    }

    $fnd = false;
    foreach (IPS_GetChildrenIDs($scrID) as $id) {
        if (IPS_EventExists($id) == false) {
            continue;
        }
        $evn = IPS_GetEvent($id);
        if ($evn['EventType'] == EVENTTYPE_CYCLIC) {
            $fnd = true;
            break;
        }
    }
    if ($fnd == false) {
        $datetype = isset($def['datetype']) ? $def['datetype'] : 0;
        $dateinterval = isset($def['dateinterval']) ? $def['dateinterval'] : 0;

        $datefrom_day = isset($def['datefrom']['day']) ? $def['datefrom']['day'] : 0;
        $datefrom_month = isset($def['datefrom']['month']) ? $def['datefrom']['month'] : 0;
        $datefrom_year = isset($def['datefrom']['year']) ? $def['datefrom']['year'] : 0;

        $dateto_day = isset($def['dateto']['day']) ? $def['dateto']['day'] : 0;
        $dateto_month = isset($def['dateto']['month']) ? $def['dateto']['month'] : 0;
        $dateto_year = isset($def['dateto']['year']) ? $def['dateto']['year'] : 0;

        $timetype = isset($def['timetype']) ? $def['timetype'] : 0;
        $timeinterval = isset($def['timeinterval']) ? $def['timeinterval'] : 0;

        $timefrom_hour = isset($def['timefrom']['hour']) ? $def['timefrom']['hour'] : 0;
        $timefrom_minute = isset($def['timefrom']['minute']) ? $def['timefrom']['minute'] : 0;
        $timefrom_second = isset($def['timefrom']['second']) ? $def['timefrom']['second'] : 0;

        $timeto_hour = isset($def['timeto']['hour']) ? $def['timeto']['hour'] : 0;
        $timeto_minute = isset($def['timeto']['minute']) ? $def['timeto']['minute'] : 0;
        $timeto_second = isset($def['timeto']['second']) ? $def['timeto']['second'] : 0;

        $dateday = isset($def['dateday']) ? $def['dateday'] : 0;
        $datedayinterval = isset($def['datedayinterval']) ? $def['datedayinterval'] : 0;

        $evnID = IPS_CreateEvent(EVENTTYPE_CYCLIC);
        IPS_SetEventCyclic($evnID, $datetype, $dateinterval, $dateday, $datedayinterval, $timetype, $timeinterval);
        IPS_SetEventCyclicDateFrom($evnID, $datefrom_day, $datefrom_month, $datefrom_year);
        IPS_SetEventCyclicDateTo($evnID, $dateto_day, $dateto_month, $dateto_year);
        IPS_SetEventCyclicTimeFrom($evnID, $timefrom_hour, $timefrom_minute, $timefrom_second);
        IPS_SetEventCyclicTimeTo($evnID, $timeto_hour, $timeto_minute, $timeto_second);
        IPS_SetParent($evnID, $scrID);
        IPS_SetEventActive($evnID, true);
        IPS_SetEventAction($evnID, '{7938A5A2-0981-5FE0-BE6C-8AA610D654EB}', []);
    }

    return $evnID;
}

/*

Beispieldefinition für zyklischen Event täglich um 0:30

$def = [
    'datetype'     => EVENTCYCLICDATETYPE_DAY,
    'dateinterval' => 1,
    'timetype'     => EVENTCYCLICTIMETYPE_HOUR,
    'timeinterval' => 1,
    'timefrom'     => [
        'hour'   => 0,
        'minute' => 30,
        'second' => 0,
    ],
];

 */
