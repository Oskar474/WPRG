<?php
if(!isset($_COOKIE['nazwa']) && !isset($_POST['nazwa'])){
    include("header.html");
    include("form.html");
    include("footer.html");
}
else if(isset($_POST['nazwa'])){
    setcookie("nazwa",$_POST['nazwa'],time() + 60 * 60 * 24 *
        365 );
    include("header.html");
    echo "<p>Dziękujemy za podanie danych.</p>";
    include("footer.html");
}
else{
    include("header.html");
    echo "Witamy, zostałeś rozpoznany jako
{$_COOKIE['nazwa']}.";
    include("footer.html");
}
?>