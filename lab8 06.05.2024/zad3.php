<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    .result {
        word-wrap: break-word;
        overflow-wrap: break-word;
    }
    div {
        max-width:  350px;
        background-color: peachpuff;
        padding: 40px;
        border: medium solid darkgreen;
    }

</style>
<body>
<div>
    <form action="stringModifier.php" method="POST">
        <h3>Modyfikator ciągów znaków</h3>
        <table>
            <tr>
                <td>Podaj ciąg znaków:  </td>
                <td><input type="text" name="inputString"></td>
            </tr>
            <tr>
                <select name="operationType">
                    <option value="reverse">Odwrócenie ciągu znaków.</option>
                    <option value="toUpper">Zamiana wszystkich liter na wielkie</option>
                    <option value="toLower">Zamiana wszystkich liter na małe</option>
                    <option value="countLetters">Liczenie liczby znaków</option>
                    <option value="trim">Usuwanie białych znaków z początku i końca ciągu</option>
                </select>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Wykonaj"></td>
            </tr>
        </table>

    </form>
</div>
<div class="result">

    <?php
    if(isset($_GET['string'])) {
        echo "Wynik: " . $_GET['string'];
    }
    ?>

</div>
</body>
</html>