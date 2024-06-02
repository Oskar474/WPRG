<?php
require_once "NoweAuto.php";

class AutoZDodatkami extends NoweAuto
{
private $alarm;
private $klima;
private $radio;

    function __construct($model, $priceInEur, $alarm, $klima, $radio)
    {
        parent::__construct($model, $priceInEur);
        $this->alarm = $alarm;
        $this->klima = $klima;
        $this->radio = $radio;
    }

    function obliczCene() {
        //zakładam że cena dodatków jest podana w PLN.
        return $this->alarm + $this->radio + $this->klima + parent::obliczCene();
    }
}