<?php

$numero1 = 10;
$numero2 = 5;

//altere aqui o tipo de conta
$operacao = "soma"; // Opções: "soma", "subtracao", "multiplicacao" ou "divisao"

switch ($operacao) {
    case "soma":


        echo $numero1 + $numero2;
        break;

    case "subtracao":


        echo $numero1 - $numero2;
        break;

    case "multiplicacao":


        echo $numero1 * $numero2;
        break;

    case "divisao":


        echo $numero1 / $numero2;
        break;

    default:


        echo "Operação inválida";
        break;
}