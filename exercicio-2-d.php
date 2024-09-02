<?php

//Sabendo-se que 100 quilowatts de energia custa um sétimo do salário mínimo, fazer um algoritmo que receba o valor do salário mínimo e a quantidade de quilowatts gasta por uma residência. Calcular: o valor em reais de cada quilowatt, o valor em reais a ser pago e o valor a ser pago com desconto de 10%.

$salarioMinimo = readline("Digite o valor do salário mínimo");

//valor de 100kw
$valor100Kw = $salarioMinimo / 7;

//valor de 1 kw
$valorPorKw = $valor100Kw / 100;
