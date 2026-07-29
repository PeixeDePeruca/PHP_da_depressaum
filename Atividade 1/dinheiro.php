<?php

///TABELA DINHEIRO
// Pobre F*dido <=100
// Classe Média >=500
// Riquinho >=1000
// Ricasso >=5000
// Elon Musk >=10000

//variavel dinheiro (saldo)
$dinheiro = 2000;


//Pobre F*dido
if ($dinheiro <= 100) {

    echo "seu saldo se enquadra na categoria: ''Pobre F*dido''";

//Classe Média    
} elseif ($dinheiro >= 101 && $dinheiro < 500) {

    echo "seu saldo se enquadra na categoria: ''Classe Média''";

//Riquinho    
} elseif ($dinheiro >= 1000 && $dinheiro < 5000) {

    echo "seu saldo se enquadra na categoria: ''Riquinho''";
    
//Ricasso    
} elseif ($dinheiro >=5000 && $dinheiro < 10000) {
    echo "seu saldo se enquadra na categoria: ''Ricasso''";
} else {
    echo "seu saldo se enquadra na categoria: ''Elon Musk''";
}
   



//pqp esse deu trabalho ein, o cara esqueceu como q usa elseif, mds socorro
//pera...será q existe elif no php? 🤔
//preciso testar algum dia...






//⚠️area de testes☢️

// }else
//         ($dinheiro >=800) {
//             echo "seu saldo se enquadra na categoria: ''Classe Média''";
// }
