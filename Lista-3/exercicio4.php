<?php

//Elaborar um programa que apresente o resultado da soma e a média dos valores pares situados na faixa numérica de 50 a 70.

$arr = [];
$soma = 0;
for($i = 50; $i <= 70; $i++) {

    array_push($arr, $i);

}


for ($i = 0; $i < count($arr); $i++) {

    if ($arr[$i] % 2 == 0){

        $soma += $arr[$i];
    }
}

echo "valor da soma: " . $soma . "\n";
$media = $soma / $i;
echo "valor da média: " . $media ."\n";