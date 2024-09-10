<?php

//Crie dois vetores, cada um com capacidade para armazenar 10 números. Solicite ao usuário que entre com os valores nestes dois vetores. O programa deverá mostrar a multiplicação dos dados dos vetores, em cada um de suas respectivas posições. Ex. vetor_a[0] * vetor_b[0] e assim por diante.

$vetA = [];
$vetB = [];
$total = [];

for ($i = 0; $i <= 9; $i++) {
    $vetA[] = readline("Digite um número para A: \n");
    implode($vetA);
}

for ($i = 0; $i <= 9; $i++) {
    $vetB[] = readline("Digite um número para B: \n");
    implode($vetB);
}

for ($i = 0; $i <= 9; $i++) {
    $total[$i] = $vetA[$i] * $vetB[$i];
}

echo "Vetor A: \n";
print_r($vetA);
echo "Vetor B: \n";
print_r($vetB);
echo "Total da multiplicação: \n";
print_r($total);

