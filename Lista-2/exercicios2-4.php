<?php

//Ler as notas da 1a. e 2a. avaliações de um aluno. Calcular a média aritmética simples e escrever uma mensagem que diga se o aluno foi ou não aprovado (considerar que nota igual ou maior que 6 o aluno é aprovado). Escrever também a média calculada.

$av1 = readline("Digite o valor da avalição 1: \n");
$av2 = readline("Digite o valor da avaliação 2: \n");

$media = ($av1 + $av2) / 2;

if ($media >= 6) {

    echo "Parabéns, aluno foi aprovado! \n";
    echo $media . "\n";

} else {

    echo "REPROVADO! :( \n";
    echo $media ."\n";
    
}