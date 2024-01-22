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

function check4LinkDefects($catID)
{
    if (IPS_ObjectExists($catID) == false) {
        echo 'object ' . $catID . ' don\'t exists' . PHP_EOL;
        return;
    }
    echo 'check id ' . $catID . '(' . IPS_GetLocation($catID) . ')' . ' and childs for defect links' . PHP_EOL;

    $lnk2obj = [];
    $objIDs = getChilds($catID, []);
    foreach ($objIDs as $objID) {
        $link = IPS_GetLink($objID);
        if (IPS_ObjectExists($link['TargetID']) == false) {
            echo '  link ' . $objID . '(' . IPS_GetLocation($objID) . ') ponits th non existing object ' . $link['TargetID'] . PHP_EOL;
        }
    }
}

check4LinkDefects(GetLocalConfig('Geräte-Typen'));
check4LinkDefects(0);
