<?php
echo "Você é o Pelé? \n";
echo "Naum, eu sou o Jô Soares sua piranha";
//ôôo lapada seca

//VARIAVEIS
$nome = " Porco Esgualepado ";
$idade = 23; 

echo "\nMy name is " . $nome . "e tenho " . $idade . " aninhos. \n" ;

//CONDICIONAL
if ($idade >= 18){
    echo "Já posso apostar na mega-sena. ";
}else{
    echo "Só posso jogar Roblox.\n";
}

//LOOP
for($i = 0; $i < 10; $i++){
    echo $i . " ";
}

//FUNÇÃO
function calcular($a, $b){
    return $a + $b;
}
echo "\n";
echo calcular(10, 5);

//ARRAY
$alunos = [
    [
        "nome" => "Alex",
        "idade" => 45,
        "cor" => "peru"
    ],
    [
        "nome" => "Kevin",
        "idade" => 67,
        "cor" => "Cor de vão de cerca."   
    ]
];

foreach( $alunos as $aluno){
    echo "\n-------";
    echo "\nNome: ", $aluno["nome"];
    echo "\nIdade: ", $aluno["idade"];
    echo "\nCor Favorita: ", $aluno["cor"];
}