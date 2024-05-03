<?php

function arrInsert($array, $position)
{
    if ($position > count($array)) {
        echo "BŁĄD";
        return;
    }
    for ($i = $position - 1; $i < count($array); $i++) {
        $temp[] = $array[$i];
    }
    $array[$position - 1] = "$";

    for ($i = 0; $i < count($temp); $i++) {
        $array[$position + $i] = $temp[$i];
    }

    print_r($array);

}

?>

<?php

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

arrInsert($array, 9);

?>