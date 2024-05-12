<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = $_POST['inputString'];
    if (is_string($_POST['inputString']) && $string != null) {
        switch ($_POST['operationType']) {
            case "reverse":
                $string = strrev($string);
                break;
            case "toUpper":
                $string = strtoupper($string);
                break;
            case "toLower":
                $string = strtolower($string);
                break;
            case "countLetters":
                $string = strlen($string);
                break;
            case "trim":
                $string = trim($string);
                break;
        }
    }
    else {
        $string = "Nieprawidłowy format!";
    }
    }
         header("Location: zad3.php?string=" . urlencode($string));
        exit();
?>