<?php

function multiplyMatrix($matrix1, $matrix2) {

    if (count($matrix1[0]) != count($matrix2)) {
        return "złe wymiary!";
    }

    $result = array();
    for ($i = 0; $i < count($matrix1); $i++) {
        for ($j = 0; $j < count($matrix2[0]); $j++) {
            $result[$i][$j] = 0;
            for ($k = 0; $k < count($matrix1[0]); $k++) {
                $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
            }
        }
    }

    return $result;
}
?>



<?php

$matrix1 = array(
    array(1, 2),
    array(3, 4),
    array(5, 6)
);

$matrix2 = array(
    array(1, 2, 3),
    array(4, 5, 6)
);

$result = multiplyMatrix($matrix1, $matrix2);

foreach ($result as $row) {
    foreach ($row as $element) {
        echo "$element ";
    }
    echo "\n";
}
?>
