<?php

declare(strict_types=1);

function getChilds($objID, $chldIDs)
{
    $objIDs = IPS_GetChildrenIDs($objID);
    foreach ($objIDs as $objID) {
        $obj = IPS_GetObject($objID);
        switch ($obj['ObjectType']) {
            case OBJECTTYPE_CATEGORY:
                $chldIDs = getChilds($objID, $chldIDs);
                break;
            case OBJECTTYPE_LINK:
                $chldIDs[] = $objID;
                break;
        }
    }
    return $chldIDs;
}

function check4LinkDuplicates($catID)
{
    if (IPS_ObjectExists($catID) == false) {
        echo 'object ' . $catID . ' don\'t exists' . PHP_EOL;
        return;
    }
    echo 'check id ' . $catID . '(' . IPS_GetLocation($catID) . ')' . ' and childs for duplicate links' . PHP_EOL;

    $lnk2obj = [];
    $objIDs = getChilds($catID, []);
    foreach ($objIDs as $objID) {
        $obj = IPS_GetObject($objID);
        if ($obj['ObjectType'] == OBJECTTYPE_LINK) {
            $lnk = IPS_GetLink($objID);
            $tID = $lnk['TargetID'];
            if (in_array($tID, $lnk2obj)) {
                echo '  duplicate link-target, link=' . $objID . '(' . IPS_GetLocation($objID) . '), target=' . $tID . '(' . IPS_GetLocation($tID) . ')' . PHP_EOL;
            } else {
                $lnk2obj[] = $tID;
            }
        }
    }
}

check4LinkDuplicates(GetLocalConfig('Geräte-Typen'));
