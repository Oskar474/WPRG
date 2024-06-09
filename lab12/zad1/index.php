<html>
<style>
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    button {
        background-color: green;
        border: 2px solid gray;
        box-shadow: 0 0 0.5em gray;
        border-radius: 5px;
        color: white;
        padding: 0.3em 1em;
    }

</style>
<body>
<h3>Manage MySQL Table</h3>
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

if (isset($_POST['deleteButton'])) {
    $deleteQuery = "DROP TABLE IF EXISTS student";
    if  ($mysqli->query($deleteQuery))
        echo "succesfully deleted table";
    else
        echo "error deleting table" . $mysqli->error . "</br>";
    exit();
}

if ($mysqli->connect_errno) {
    printf("Couldn't connect to the database: %s\n", $mysqli->connect_error. "</br>");
    exit();
}

$createTableQuery = "
CREATE TABLE Student (
    studentID INT AUTO_INCREMENT PRIMARY KEY,
    Firstname VARCHAR(50) NOT NULL,
    Secondname INT NOT NULL,
    Salary VARCHAR(100),
    DateOfBirth date
)";

try {
    $mysqli->query($createTableQuery);
    echo "Created table successfully". "</br>";
}
catch (mysqli_sql_exception $e) {
    echo "Error creating table: " . $mysqli->error . "<br>";
}

?>
<div>
    <br>
    <form method="post" >
        <button name="deleteButton" type="submit">DELETE!</button>
    </form>
</div>

<?php
?>

</body>
</html>