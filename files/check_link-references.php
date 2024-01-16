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
            default:
                $chldIDs[] = $objID;
                break;
        }
    }
    return $chldIDs;
}

function check4LinkReferences($catID)
{
    if (IPS_ObjectExists($catID) == false) {
        echo 'object ' . $catID . ' don\'t exists' . PHP_EOL;
        return;
    }

    echo 'check id ' . $catID . '(' . IPS_GetLocation($catID) . ')' . ' and childs if referenced by a link' . PHP_EOL;

    $lnk2target = [];
    $lnkIDs = IPS_GetLinkList();
    foreach ($lnkIDs as $lnkID) {
        $lnk = IPS_GetLink($lnkID);
        $targetID = $lnk['TargetID'];
        $lnk2target[$targetID] = $lnkID;
    }

    $objIDs = getChilds($catID, []);
    foreach ($objIDs as $objID) {
        $obj = IPS_GetObject($objID);
        if (isset($lnk2target[$objID])) {
            $targetID = $lnk2target[$objID];
            echo '  object ' . $objID . '(' . IPS_GetLocation($objID) . ') is linked from ' . $targetID . '(' . IPS_GetLocation($targetID) . ')' . PHP_EOL;
        }
    }
}
