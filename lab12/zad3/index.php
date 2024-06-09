<html>
<style>
    input {
        color: green;
        margin-bottom: 10px;
    }
    body {
        display: flex;
        flex-direction: column;
        align-items: center;

    }
    div {
        padding: 50px;
        border-style: solid;
        border-color: #333333;
        border-width: 4px;
    }
</style>
<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = "Lab";

$dbconn=mysqli_connect($dbhost, $dbuser, $dbpass);
$sql='create database IF NOT EXISTS '. $dbname;
mysqli_query($dbconn, $sql);
mysqli_close($dbconn);

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($mysqli->connect_errno) {
    printf("Błąd połączenia z bazą danych: %s\n", $mysqli->connect_error. "</br>");
    exit();
}
$sql = "CREATE TABLE IF NOT EXISTS Users(
    ID INT AUTO_INCREMENT PRIMARY KEY,
    first_name varchar(255),
    last_name varchar(255),
    email varchar(255),
    password varchar(255),
    tel_number varchar(10)
);";
$mysqli->query($sql);
?>
<div>
<form action="" method="post">
    <label for="first_name">Imie</label><br>
    <input required type="text" id="first_name" name="first_name"><br>
    <label for="last_name">Nazwisko</label><br>
    <input required type="text" id="last_name" name="last_name"><br>
    <label for="email">E-mail</label><br>
    <input required type="email" id="email" name="email"><br>
    <label for="telephone">Numer telefonu</label><br>
    <input required type="text" id="telephone" name="telephone"><br>
    <label for="password">Hasło</label><br>
    <input required type="password" id="password" name="password"><br>
    <input type="submit" name="register_button" value="Zarejestruj">
</form>
    </div>
<?php

require_once "CheckRegisterData.php";
if (isset($_POST['register_button'])) {

    $name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $tel = $_POST['telephone'];
    $pass = $_POST['password'];
    $hashedPassword = password_hash($pass,PASSWORD_DEFAULT);
    if (checkData($tel, $pass)){
        $sql = "INSERT INTO Users(first_name, last_name, email, password, tel_number) 
                VALUES ('$name', '$last_name', '$email', '$hashedPassword', '$tel')";
        if ($mysqli->query($sql) === TRUE) {
            echo "Dodano użytkownika do bazy danych";
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    }
}
?>

</html>