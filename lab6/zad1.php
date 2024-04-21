<?php

function findFirst($lowerRange, $upperRange)
{
    while ($lowerRange <= $upperRange) {
        $isFirst = true;
        for ($i = 2; $i < $lowerRange; $i++) {
            if ($lowerRange % $i == 0) {
                $isFirst = false;
            }
        }
        if ($isFirst && $lowerRange != 1) {
            echo "$lowerRange, ";
        }
        $lowerRange++;
    }
}

?>


<?php
findFirst(1,100);
?>