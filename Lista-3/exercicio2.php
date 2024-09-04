<?php

//Elaborar um programa que leia 10 valores inteiros e no final apresente a somatória e a média deles.

$soma = 0;

for ($i = 0; $i < 10; $i++) {

    $numero = readline("Digite um valor: \n");
    $soma += $numero;
}

echo "valor da soma: " . $soma . "\n";
$media = $soma / $numero;
echo "valor da média: " . $media ."\n";
