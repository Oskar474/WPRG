

<html>

<style>
input {
    margin-bottom: 10px;
}
select {
    margin-bottom: 10px;
}
</style>

<form method="post">
    <div>
        <label>ścierzka: </label>
        <input type="text" name="path">
        <br>
        <label>Nazwa katalogu: </label>
        <input type="text" name="catalogName">
        <br>
        <label>Rodzaj operacji: </label>
        <select name="operationType">
            <option value="read">odczyt plików</option>
            <option value="delete">usuń katalog</option>
            <option value="create">stwórz katalog</option>
        </select>
    <br>
       <input type="submit">
    </div>
</form>

<?php
include "back.php";
fileManager($_POST['path'], $_POST['catalogName'], $_POST['operationType']);
?>

</html>