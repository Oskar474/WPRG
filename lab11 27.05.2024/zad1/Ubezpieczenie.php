<?php
require_once "AutoZDodatkami.php";

class Ubezpieczenie extends AutoZDodatkami
{
    private $procentUbezpieczenia;
    private $lataPosiadania;


    function __construct($model, $priceInEur, $alarm, $klima, $radio, $procentUbezpieczenia, $lataPosiadania)
    {
        parent::__construct($model, $priceInEur, $alarm, $klima, $radio);
        $this->procentUbezpieczenia = $procentUbezpieczenia;
        $this->lataPosiadania = $lataPosiadania;
    }
    function obliczCene()
    {
        return $this->procentUbezpieczenia * (parent::obliczCene() * ((100 - $this->lataPosiadania) / 100));
    }

}