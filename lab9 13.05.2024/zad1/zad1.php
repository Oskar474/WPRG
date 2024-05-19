
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
if(isset($_GET['age'])) {
    echo "Twój wiek: " . $_GET['age'];
}
?>
<br>
<?php
if(isset($_GET['dayOfWeek'])) {
    echo "Dzień tygodnia w którym się urodziłeś: " . $_GET['dayOfWeek'];
}
?>
<br>
<?php
if(isset($_GET['daysUntilBday'])) {
    echo "Liczba dni do następnych urodzin: " . $_GET['daysUntilBday'];
}
?>

</html>
