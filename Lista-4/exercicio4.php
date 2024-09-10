<?php

//Ler um vetor A de 10 números. Após, ler mais um número e guardar em uma variável B. Armazenar em um vetor C o resultado de cada elemento de A multiplicado pelo valor B. Logo após, imprimir o vetor C.

$vetorA = [];

for ($i = 0; $i <= 9; $i++) {
        $vetorA[$i] = (int)readline("Digite um número: \n");
    }



$vetorB = (int)readline("Digite um valor para multiplicar: \n");
$vetorC = [];

for ($i = 0; $i <= 9; $i++) {
    $vetorC[$i] = $vetorA[$i] * $vetorB;
}  

foreach ($vetorC as $valor) {
    echo $valor . "\n";
} 

