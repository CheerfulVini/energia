<?php

require_once("IConsumidorEnergia.php");

class Comercial implements IConsumidorEnergia{
    public function getValorFatura($tempo){
        if($tempo <= 100){
            return $tempo * 1.45;
        }else{
            return (($tempo - 100) * 1.6) + 145;
        }
    }
}
