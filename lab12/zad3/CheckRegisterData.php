<?php

function checkData($tel, $password)
{
    if (strlen((string)$tel) != 9 && !is_int($tel)) {
        printf("Nieprawidłowy numer telefonu, podaj 9 cyfr.");
        return false;
    }
    if (!preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*\W).{6,}$/', $password)) {
        printf("Hasło musi zawierać co najmniej jedną cyfrę, dużą literę, znak specjalny i mieć długość co najmniej 6 znaków.");
        return false;
    }
    return true;
}
?>