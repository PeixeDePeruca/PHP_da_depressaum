<?php


//criação do array associativo com as chaves solicitadas
$pessoa = [
    "Nome"   => "Anchova",
    "Idade"  => 23,
    "Cidade" => "Balneário Camboriú",
    "Tchola" => "Não" // pode ser um texto, booleano (true/false)
];

//exibindo cada informação usando as chaves do array
echo "Nome: " . $pessoa["Nome"] . "\n";
echo "Idade: " . $pessoa["Idade"] . " anos\n";
echo "Cidade: " . $pessoa["Cidade"] . "\n";
echo "Tchola: " . $pessoa["Tchola"] . "\n";

?>