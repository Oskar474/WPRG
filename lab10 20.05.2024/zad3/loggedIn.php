<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit();
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pl">
<body>
<h1>Witamy!</h1>
<p>jesteś zalogowany.</p>
<a href="loggedIn.php?logout=1">Wyloguj</a>
</body>
</html>
