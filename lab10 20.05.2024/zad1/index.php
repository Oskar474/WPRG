<?php
if(!isset($_COOKIE['counter'])){
    setcookie("counter",1,time() + 60 * 60 * 24 *
        365 );
    echo "piersze odwiedziny!";
}
else
{
    setcookie("counter",$_COOKIE['counter'] + 1,time() + 60 * 60 * 24 *
        365 );
    echo "Liczba odwiedzin: {$_COOKIE['counter']} ";

}

?>