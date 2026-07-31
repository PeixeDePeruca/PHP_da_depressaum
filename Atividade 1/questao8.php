<?php

//váriavel dos memes
$memes = [
    "Free Bird by Lynyrd Skynyrd starts playing",
    "MR BEAST!!!",
    "Bolina de Gorfe",
    "Moradores de Tatuapé vendo um Tatu de carro: 😡grrr",
    "Lá ele"
];

//exibição dos memes usando foreach
//"paracada" meme como meme posição X da lista for igual ou maior ao meme (atual) print o meme da próxima posição
foreach ($memes as $memeposicao => $meme) {
    echo ($memeposicao + 1) . "- " . $meme . "\n";
}

?>