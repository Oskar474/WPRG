<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista odnośników</title>
</head>
<body>
<h1>Lista odnośników</h1>
<ul>

    <?php
    $filename = 'links.txt';

        if ($fd = fopen($filename, 'r')) {

            while (($line = fgets($fd)) !== false) {
                $line = trim($line);

                list($link, $description) = explode(';', $line);

                echo "<li><a href=\"$link\"> $description </a></li>";
            }
            fclose($fd);
        }
        else
            echo "<li>Nie można otworzyć pliku $filename</li>";

    ?>

</ul>
</body>
</html>