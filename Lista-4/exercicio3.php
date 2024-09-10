<?php

//Ler um vetor de 10 posições (aceitar somente números positivos). Escrever a seguir o valor do maior elemento do vetor e a respectiva posição que ele ocupa no vetor.

$vetor = [];

for ($i = 0; $i <= 9; $i++) {

    do {
        $num = (int)readline("Digite um número positivo: \n");

        if ($num <= 0) {
        echo "Digite um número positivo maior que 0! \n";
        }
    } while ( $num <= 0);

    $vetor[$i] = $num;

}

$maiorValor = 0;
$posicao = 0;

for ($i = 1; $i < 10; $i++) {

    if ($vetor[$i] > $maiorValor) {
        $maiorValor = $vetor[$i];
        $posicao = $i;
    }

}

echo "O maior valor é $maiorValor e a posição é: " . ($posicao + 1) . "\n";
