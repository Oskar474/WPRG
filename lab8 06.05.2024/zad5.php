<?php
while (true) {
    echo "Podaj liczbę zmiennoprzecinkową: ";
    $num = (float)readline("");
    if (preg_match("/[0-9]+\.[0-9]+/", $num))
        break;
    echo "niepoprawny format.\n";
}

    preg_match("/\.[0-9]+/", $num, $m);

    $numCount = strlen($m[0]) - 1;
    echo "Ilość cyfr po przecinku: " . $numCount;
?>