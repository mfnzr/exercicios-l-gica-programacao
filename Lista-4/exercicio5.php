<?php 

//Faça um algoritmo para ler 10 números e armazenar em um vetor. Após a leitura total dos 10 números, o algoritmo deve escrever esses 10 números lidos na ordem inversa.

$vetor = [];
for ($i = 0; $i <= 9; $i++) {
    $vetor[] = readline("Digite um número: \n");
}

foreach ($vetor as $num) {
    $vetorRev = array_reverse($vetor);
}


print_r($vetor);
echo "\n";
print_r($vetorRev);
echo "\n";