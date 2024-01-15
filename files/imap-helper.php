<?php

declare(strict_types=1);

function Imap_Request($instID, $url_pfx, $request)
{
    $cfg = json_decode(IPS_GetConfiguration($instID), true);
    $host = $cfg['Host'];
    $port = $cfg['Port'];
    $username = $cfg['Username'];
    $password = $cfg['Password'];

    $url = 'imaps://' . $host . ':' . $port . '/' . $url_pfx;

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $request);
    curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);

    $response = curl_exec($ch);
    $errno = curl_errno($ch);

    curl_close($ch);

    if ($errno) {
        echo "Imap_Request: gor error $errno\n";
        return false;
    }

    return true;
}

function Imap_DeleteMessage($instID, $uid)
{
    $request = 'UID STORE ' . $uid . ' +FLAGS \DELETED';
    $ret = Imap_Request($instID, 'INBOX/', $request);
    if ($ret) {
        $ret = Imap_Request($instID, 'INBOX/', 'EXPUNGE');
    }

    return $ret;
}
