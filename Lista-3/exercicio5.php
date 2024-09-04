<?php

//Elaborar um programa que leia valores inteiros até que o valor zero seja informado. No final deve ser apresentado o maior e o menor valor fornecido pelo usuário.


$maior = 0;
$menor = PHP_INT_MAX;

for ($i = 1; $i <= 10; $i++) {

    $numero = readline("Digite um valor de 1 a 10: \n");
    
    if($numero == 0) {
        echo "Fim! \n";
        break;
    }
    if ($numero > $maior){
        $maior = $numero;

    }
    if($numero < $menor){
        $menor = $numero;
    }
}


echo "valor da maior: " . $maior . "\n";
echo "valor da menor: " . $menor ."\n";
