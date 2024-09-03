<?php

//Sabendo-se que 100 quilowatts de energia custa um sétimo do salário mínimo, fazer um algoritmo que receba o valor do salário mínimo e a quantidade de quilowatts gasta por uma residência. Calcular: o valor em reais de cada quilowatt, o valor em reais a ser pago e o valor a ser pago com desconto de 10%.

$salarioMinimo = readline("Digite o valor do salário mínimo:" . "\n");
echo $salarioMinimo;

$kwGasto = readline("Digite a quantidade de quilowats gasto:" . "\n");
echo $kwGasto;

//valor de 100kw
$valor100Kw = $salarioMinimo / 7;

//valor de 1 kw
$valorPorKw = $valor100Kw / 100;

//valor total
$valorPagar = $valorPorKw * $kwGasto;

//valor com desconto
$desconto = $valorPagar * 0.10;
$comDesconto = $valorPagar - $desconto;

echo "valor de 100 quilowatts é de R$ $valor100Kw" . "\n";
echo "valor de cada quilowatt é de R$ $valorPorKw" . "\n";
echo "valor total a ser pago é de R$ $valorPagar" . "\n";
echo "Valor com desconto é de R$ $comDesconto" . "\n";
?>