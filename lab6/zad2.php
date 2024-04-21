

<?php

function sumSequence($first, $difference, $elementCount)
{
    if ($difference == 1) {
        $sum = $first * $elementCount;
    }
    else {
        $sum = $first * ((1 - pow($difference, $elementCount)) / (1 - $difference));
    }

    echo "Suma wyrazów ciągu geometrycznego: $sum";

    $sum = (((2*$first) + (($elementCount -1) * $difference))/2) * $elementCount;
    echo "\nSuma wyrazów ciągu arytmetycznego: $sum";


}


?>


<?php
sumSequence(2,3,10);
?>

