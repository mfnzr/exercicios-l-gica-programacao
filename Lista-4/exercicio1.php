<?php

//Escreva um programa que declare um array. O array deve ser preenchido automaticamente com números múltiplos de 5 até possuir 10 elementos. Depois disso imprima cada valor.


$arr = [];

for ($i = 1; $i <= 10; $i++) {
    $arr[] = $i * 5;
}

foreach ($arr as $value) {
    echo $value . "\n";
}
