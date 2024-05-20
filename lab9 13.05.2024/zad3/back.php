<?php

function counter()
{
    $filename = 'licznik.txt';

    if (!file_exists($filename)) {
        file_put_contents($filename, '0');
    }

    if (!$fd = fopen($filename, 'r+')) {
        echo "Nie można otworzyć pliku $filename";
    } else {

        $fileContent = fread($fd, filesize($filename));
        $counter = (int) $fileContent + 1;
        fseek($fd, 0);
        fwrite($fd, $counter);
        fclose($fd);

        echo $counter;
    }
}
?>