<?php


error_reporting(E_ALL ^ E_WARNING);
fileManager($_POST['path'], $_POST['catalogName'], $_POST['operationType']);

function fileManager($path, $name, $operationType = "read")
{
    $pathName = $path . $name;
    switch ($operationType) {
        case "read":
            if (opendir($pathName)) {
                echo "Lista plików w katalogu $pathName : <br/>";
                foreach (scandir($pathName) as $file) {
                    if ($file != '.' && $file != '..')
                        echo "$file<br/>";
                }
            } else {
                exit("Nie mogę otworzyć katalogu $pathName");
            }
            break;

        case "delete":
            if (file_exists($pathName) && is_dir($pathName)) {
                $files = scandir($pathName);
                $fileCounter = 0;
                foreach ($files as $file) {
                    if ($file != '.' && $file != '..') {
                        $fileCounter++;
                    }
                }

                if ($fileCounter < 1) {
                    rmdir($pathName);
                    echo "Pomyślnie usunięto katalog";
                    break;

                } else {
                    echo "Katalog nie jest pusty.";
                    break;
                }
            } else {
                echo "Wybrany katalog nie istnieje lub nie jest katalogiem";
                break;
            }
            break;

        case "create":
            if(mkdir($pathName))
                echo "Pomyśnie utworzo katalog";
            else
                echo "Nie udało się utworzyć katalogu";
            break;

    }


}

?>