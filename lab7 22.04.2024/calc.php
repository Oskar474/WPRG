<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Wynik dodawania</title>
</head>
<body>
<?php
        $num1 = $_POST['liczba1'];
        if (isset($_POST['liczba2']))
             $num2 = $_POST['liczba2'];
        else
            $num2 = 0;
        $num = $num1;

        if (is_numeric($num1) && is_numeric($num2)) {

            switch ($_POST['operationType']) {
                case("addition"):
                    $result = $num1 + $num2;
                    echo "Wynik dodawania: $num1 + $num2 = $result";
                    break;
                case("subtraction"):
                    $result = $num1 - $num2;
                    echo "Wynik odejmowanie: $num1 - $num2 = $result";
                    break;
                case("multiplication"):
                    $result = $num1 * $num2;
                    echo "Wynik mnożenia: $num1 * $num2 = $result";
                    break;
                case("division"):
                    $result = $num1 / $num2;
                    echo "Wynik dzielenia: $num1 / $num2 = $result";
                    break;
            }
        } else {
            echo "Podane wartości nie są liczbami.";
            return;
        }


        if (is_numeric($num)) {
            switch ($_POST['operationType']) {
                case("sin"):
                    $result = sin(deg2rad($num));
                    echo "wartość sinusa dla kąta: $num ° = $result";
                    break;
                case ("cos"):
                    $result = cos(deg2rad($num));
                    echo "wartość cosinusa dla kąta: $num ° = $result";
                    break;
                case ("tg"):
                    $result = tan(deg2rad($num));
                    echo "wartość tangensa dla kąta: $num ° = $result";
                    break;
                case ("binToDec"):
                    echo "Liczba $num (postać binarna) w postaci dziesiętnej to: " . bindec($num);
                    break;
                case ("decToBin"):
                    echo "Liczba $num (postać dziesiętna) w postaci binarnej to: " . decbin($num);
                    break;
                case ("decToHex"):
                    echo "Liczba $num (postać dziesiętna) w postaci szesnastkowej to: " . bin2hex($num);
                    break;
                case ("hexToDec"):
                    echo "Liczba $num (postać szesnastkowa) w postaci dziesiętnej to: " . hex2bin($num);
                    break;
            }
            }
        else {
            echo "Podane wartości nie są liczbami.";
            return;
        }


?>

</body>
</html>