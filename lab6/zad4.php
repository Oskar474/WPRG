<?php


function digitSum($number)
{
    $numberLength = strlen(strval($number));
    $sum = 0;
    for ($i = 0; $i < $numberLength; $i++) {
        $digit = floor($number / pow(10, $i)) % 10;
        //echo $digit;

        $sum += $digit;
    }
    echo $sum;
}

?>


<?php
digitSum(223);
echo "\n";
digitSum(555);
?>
