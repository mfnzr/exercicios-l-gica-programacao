<?php

//Calcular o valor de um produto que sofreu reajuste de 1% (Aumento).

$produto = readline("Digite o valor do produto:");
$reajuste = 1.01;

$valorTotal = $produto * $reajuste;

echo $valorTotal;

?>