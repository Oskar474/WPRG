<?php
echo "Podaj ciąg znaków w którym chcesz policzyć samogłoski: ";
$string = (string)readline("");
$counter = 0;

for ($i=0; $i<strlen($string); $i++) {
    // echo $string[$i];
    if (preg_match("/[aeiou]/", $string[$i]))
        $counter++;
}
echo "Ilość samogłosek w stringu: \"$string\" to: " . $counter;

?>