<?php
//Uma revendedora de carros usados paga a seus vendedores um salário fixo mensal, além de uma comissão fixa por cada carro vendido e mais 5% do valor total das vendas realizadas pelo vendedor. Escreva um algoritmo que receba como entrada o número de carros vendidos pelo vendedor, o valor total das vendas, o salário fixo mensal e o valor da comissão por carro vendido. O algoritmo deve calcular e exibir o salário final do vendedor, que é a soma do salário fixo, da comissão por carro vendido, e 5% do valor total das vendas.

$salarioFixo = readline("Digite o valor do salário:" . "\n");
$comissaoPorVenda = readline("Digite o valor da comissão" . "\n");

$carrosVendidos = readline("Digite a quantidade de carros vendidos:" . "\n");
$valorTotalVendas = readline("Digite o valor total das vendas:" . "\n");

$salarioFinal = ($salarioFixo + $comissaoPorVenda) * 1.05;
echo $salarioFinal . "\n";

?>