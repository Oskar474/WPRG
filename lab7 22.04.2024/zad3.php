<?php
function generateWeirdArray($a, $b, $c, $d)
{
    $index = range($a, $b);
    $tempValues = range($c, $d);
    $values = array();

    if (count($index) > count($tempValues)) {
        echo "więcej indeków niż wartośći, nie można wygenerować talblicy.";
        return;
    }

    $t = 0;
    for($i = $a; $b >= $i; $i++) {
        $values[$i] = $tempValues[$t];
        $t++;
    }

    echo count($index);
    echo "\n";
    echo count($values);
    $result = array_combine($index, $values);

    print_r($result);

}

generateWeirdArray(5,18,20, 330);

?>
