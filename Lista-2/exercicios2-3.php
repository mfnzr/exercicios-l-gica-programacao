<?php

//As maçãs custam R$1,30 cada se forem compradas menos de uma dúzia, e R$1,00 se forem compradas pelo menos 12. Escreva um programa que leia o número de maçãs compradas, calcule e escreva o custo total da compra.

$quantidade = readline("Digite a quantidade comprada: \n");


if ($quantidade >= 12) {

    $valorComDesconto = $quantidade * 1;
    echo $valorComDesconto . "\n";


} else {

    $valorSemDesconto = $quantidade * 1.30;
    echo $valorSemDesconto . "\n";

}