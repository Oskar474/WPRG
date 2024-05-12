<?php
echo "Podaj ciąg znaków: ";
$string = (string)readline("");
modifyString($string);



function modifyString ($string)
{
    echo strtoupper($string) . "\n";
    echo strtolower($string) . "\n";
    echo ucfirst($string) . "\n";
    echo ucwords($string);
}
?>