<?php

require_once("IConsumidorEnergia.php");

class Residencial implements IConsumidorEnergia{
    public function getValorFatura($tempo){
        return 1.05 * $tempo;
    }
}
