<?php
echo "Podaj ciąg znaków: ";
$string = (string)readline("");
$counter = 0;

for ($i=0; $i<strlen($string); $i++) {
    if (preg_match("/[\\/\\\\:*?\"<>|+-]/", $string[$i]))
        $string[$i] = "*";
}
$string = str_replace("*", "", $string);
echo $string;

?>

