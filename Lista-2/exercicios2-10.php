<?php

//Um comerciante usa margem de lucro de 45% se o valor de compra do produto for menor que R$20,00 e 30% nos demais casos. Dado o valor do produto, calcule o preço de venda.

$valor = readline("Digite o valor do produto: \n");

$lucro45 = $valor * 0.45;
$lucro30 = $valor * 0.30;

if ($valor <= 20)  {

    $precoVenda = $valor + $lucro45;
    echo $precoVenda . "\n";

} else {

    $precoVenda = $valor + $lucro30;
    echo $precoVenda . "\n";
}