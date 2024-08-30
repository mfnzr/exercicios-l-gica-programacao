<?php

//Dados dois números inteiros (dividendo e divisor), apresentar o quociente e o resto.
$a = readline("Digite um número:");
$b = readline("Digite outro número:");

$resultadoDivisao = $a / $b;
$resto = $a % $b;

echo $resultadoDivisao . "\n";
echo $resto;
echo "\n";