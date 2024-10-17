<?php

require_once("IConsumidorEnergia.php");

class Industrial implements IConsumidorEnergia{
    public function getValorFatura($tempo){
        if($tempo <= 500){
            return $tempo * 1.8;
        }else{
            return (($tempo - 500) * 2.3) + 1.8 * 500;
        }
    }
}
