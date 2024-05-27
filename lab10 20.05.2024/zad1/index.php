<html>

<h3>Witaj na mojej  stronie</h3>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset'])) {
    setcookie("counter", 0, time() + 60 * 60 * 24 * 365);
    header("Location: index.php");
    exit();
}

if(!isset($_COOKIE['counter'])){
    setcookie("counter", 1, time() + 60 * 60 * 24 * 365);
    echo "Piersze odwiedziny!";
} else {
    $counter = $_COOKIE['counter'] + 1;
    setcookie("counter", $counter, time() + 60 * 60 * 24 * 365);
    echo "Liczba odwiedzin: $counter ";

    if ($counter > 10) {
        echo "<br>Jesteś naszym stałym użytkownikiem, dziękujemy.";
    }
}
?>

<form action="index.php" method="post">
    <p>
        <label>Reset liczby odwiedzin</label>
        <input type="submit" value="reset" name="reset">
    </p>
</form>
</html>