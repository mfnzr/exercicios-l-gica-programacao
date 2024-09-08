<?php

//Leia 2 números inteiros positivos e apresente a soma dos n números existentes entre eles. Exemplo: 1 e 4 deve apresentar a soma de 2 e 3.
$num1 = readline("Digite um número:");
$num2 = readline("Digite um número:");

function soma ($num1, $num2) {
    
    $soma = 0;

    if($num1 > $num2) {
        $var = $num1;
        $num1 = $num2;
        $num2 = $var;
    }

    for ($i = $num1 + 1; $i < $num2; $i++) {
        $soma += $i;
    }

    return $soma;
}

$total = soma($num1, $num2);

echo "a soma entre os numeros $num1 e $num2 é: $total";