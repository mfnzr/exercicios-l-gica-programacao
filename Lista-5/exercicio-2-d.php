<?php

//Leia três números inteiros: a, b e c, onde a>1; e apresente a soma de todos os números inteiros de b até c que sejam divisíveis por a. Exemplo: Para os valores de entrada 2 (para a), 5 (para b) e 10 (para c), a soma será 6+8+10= 24

function somaDivisiveis($a, $b, $c) {
    $soma = 0;

    if ($b > $c) {
        $temp = $b;
        $b = $c;
        $c = $temp;
    }

    for ($i = $b; $i <= $c; $i++) {

        if ($i % $a == 0) {
            $soma += $i;
        }
    }

    return $soma;
}

$a = readline("Digite um número maior que 1:");
$b = readline("Digite um número:");
$c = readline("Digite outro número:");

if ($a > 1) {
    $resultado = somaDivisiveis($a, $b, $c);
    echo "A soma dos números entre $b e $c que são divisíveis por $a é: $resultado";
} else {
    echo "O valor de 'a' deve ser maior que 1.";
}

