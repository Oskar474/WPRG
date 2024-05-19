<?php

//error_reporting(E_ALL ^ E_WARNING);
fileManager("C:\Users\Oskar\Desktop\sda", "Hej", "delete");

function fileManager($path, $name, $operationType = "read")
{
    switch ($operationType) {
        case "read":
            if (opendir($path)) {
                echo "Lista plików w katalogu $path: <br/>";
                foreach (scandir($path) as $file) {
                    if ($file != '.' && $file != '..')
                        echo "$file<br/>";
                }
            } else {
                exit("Nie mogę otworzyć katalogu $path");
            }
            break;

        case "delete":
            if (file_exists($path) && is_dir($path)) {
                $files = scandir($path);
                $fileCounter = 0;
                foreach ($files as $file) {
                    if ($file != '.' && $file != '..') {
                        $fileCounter++;
                    }
                }

                if ($fileCounter < 1) {
                    rmdir($path);
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
            // You can add code here to create a directory if needed
            break;

    }


}

?>