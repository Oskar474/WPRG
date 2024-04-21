<?php


function checkPangram($text) {
    $text = strtolower($text);

        for ($o = 97; $o <= 122; $o++) {
            $letter = false;

            for ($i = 0; $i<strlen($text); ++$i) {
                if (ord($text[$i]) < 97 || ord($text[$i]) > 122)
                    continue;
                if (ord($text[$i]) == $o)
                    $letter = true;
            }
            if (!$letter)
                return false;
        }
        return true;
}

?>

<?php
var_dump(checkPangram("Waltz, nymph, for quick jigs vex Bud."));
var_dump(checkPangram("Hello"));
?>
