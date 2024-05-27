<?php
session_start();

$correctUsername = "admin";
$correctPassword = "123";

if (isset($_POST['login']) && isset($_POST['password'])) {
    $username = $_POST['login'];
    $password = $_POST['password'];

    if ($username == $correctUsername && $password == $correctPassword) {
        $_SESSION['loggedin'] = true;
        header("Location: loggedIn.php");
        exit();
    } else {
        $error = "Błędny login lub hasło!";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
</head>
<body>
<?php
if (isset($error)) {
    echo "<p>$error</p>";
}
?>
<form method="post" action="index.php">
    <label >Login:</label>
    <input type="text" id="login" name="login" required><br>
    <label >Hasło:</label>
    <input type="password" id="password" name="password" required><br>
    <input type="submit" value="Zaloguj">
</form>
</body>
</html>
