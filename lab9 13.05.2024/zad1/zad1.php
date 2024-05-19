
<html lang="en">

<form action="back.php" method="get">

    <div>
        <label for="birthDate">Podaj datę urodzenia: </label>
        <input type="date" id="birthDate" name="birthDate">
    </div>
    <div>
        <input type="submit" value="wyślij">
    </div>

</form>

<?php
if(isset($_GET['string'])) {
    echo "Wynik: " . $_GET['string'];
}
?>

</html>
