<?php

    require_once("model/Comercial.php");
    require_once("model/Industrial.php");
    require_once("model/Residencial.php");

print("1.Residencial\n2.Comercial\n3.Industrial\n");

$escolha = readline("Qual propriedade voce tem?");

switch ($escolha) {
    case 1:
        print("Qual o tempo usado?");
        $escolha = readline();
        $propriedade = new Residencial;
    break;

    case 2:
        print("Qual o tempo usado?");
        $escolha = readline();
        $propriedade = new Comercial;
    break;
    
    case 3:
        print("Qual o tempo usado?");
        $escolha = readline();
        $propriedade = new Industrial;
    break;
}

print $propriedade->getValorFatura($escolha);
