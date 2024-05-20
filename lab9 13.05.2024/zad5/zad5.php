<?php
function isSpecialIp($ip, $filename = 'ipList.txt') {
    if (!file_exists($filename)) {
        return false;
    }

    $specialIp = file($filename, FILE_IGNORE_NEW_LINES);
    return in_array($ip, $specialIp);
}

$ip = $_SERVER['REMOTE_ADDR'];
//$ip = "111.222.333.444";
//ip zawarte w pliku, do testu.

if (isSpecialIp($ip)) {
    include 'vip.html';
} else {
    include 'plebs.html';
}
?>