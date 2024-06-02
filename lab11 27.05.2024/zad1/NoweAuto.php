<?php

class NoweAuto
{
protected $model;
protected $priceInEur;
protected $eurPln = 4.3;


    function __construct($model, $priceInEur)
    {
        $this->model = $model;
        $this->priceInEur = $priceInEur;
    }

    function obliczCene(){
        return $this->priceInEur * $this->eurPln;
    }
}