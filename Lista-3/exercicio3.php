<?php

//Elaborar um programa que leia sucessivamente valores inteiros e no final apresente a somatória, a média e a quantidade de valores lidos. O programa deve ler os valores enquanto o usuário estiver fornecendo valores diferentes de zero. 

$soma = 1;

for ($i = 1; $i > 0; $i++) {

    $numero = readline("Digite um valor: \n");
    $soma += $numero;
    
    if($numero == 0) {
        break;
    }
}

echo "valor da soma: " . $soma . "\n";
$media = $soma / $i;
echo "valor da média: " . $media ."\n";
echo "quantidade de valores lidos:" . $i . "\n";