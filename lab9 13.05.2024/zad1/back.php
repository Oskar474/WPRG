<?php


if (isset($_GET['birthDate'])) {

    date_default_timezone_set('Europe/Warsaw');

    $currentDate = date('Y-m-d');
    $inputDate = $_GET['birthDate'];

    $day = getDayOfWeek($inputDate);
    $age = getAge($inputDate,$currentDate);

    header("Location: zad1.php?string=" . urlencode($age));
}

function getAge($inputDate, $currentDate)
{
    $r1 = (int) date("Y", strtotime($inputDate));
    $m1 = (int) date("m", strtotime($inputDate));
    $d1 = (int) date("d", strtotime($inputDate));

    $r2 = (int) date("Y", strtotime($currentDate));
    $m2 = (int) date("m",  strtotime($currentDate));
    $d2 = (int) date("d",  strtotime($currentDate));

    if ($m1 < $m2)
        return $r2-$r1;
    elseif ($m1 > $m2)
        return $r2-$r1-1;
    elseif ($m1 == $m2){
        if ($d1 <= $d2)
            return $r2-$r1;
        else
            return $r2-$r1 - 1;
    }
}
function getDayOfWeek($inputDate)
{
    switch (date("N", strtotime($inputDate))) {
        case 0:
            return "niedziela";
        case 1:
            return "poniedziałek";
        case 2:
            return "wtorek";
        case 3:
            return "środa";
        case 4:
            return "czwartek";
        case 5:
            return "piątek";
        case 6:
            return "sobota";
        default:
            return "błąd";
    }
}

?>