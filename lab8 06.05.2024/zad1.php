<?php

modifyString("hello MY friends!");




function modifyString ($string)
{
    echo strtoupper($string) . "\n";
    echo strtolower($string) . "\n";
}
?>