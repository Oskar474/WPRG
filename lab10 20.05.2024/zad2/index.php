
<html>

<?php
if(isset($_COOKIE['isSent']) && $_COOKIE['isSent']){
    echo "Już zagłosowałeś w tej ankiecie.";

    exit();
}
?>

<form method="post" action="index.php">
    <div>
        <label>Czy Piwo jest smaczne?</label>
        <select>
            <option>Tak</option>
            <option>oczywiście</option>
            <option>Jeszcze jak</option>
        </select>
    </div>
    <p>
        <input type="submit" name="submit" value="prześlij">
    </p>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['submit']) {
        setcookie("isSent", true, time() + 60 * 60 * 24 * 365);
    echo "Dziękujemy za oddanie głosu";
    exit();
    }
?>

</html>
