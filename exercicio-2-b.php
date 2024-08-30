<?php

//A partir de quatro números que serão fornecidos, calcular a média ponderada, considerando os pesos 1, 2, 3 e 4 respectivamente.

$a = readline("Digite o primeiro número:");
$b = readline("Digite o segundo número:");
$c = readline("Digite o terceiro número:");
$d = readline("Digite o quarto número:");

$peso1 = 1;
$peso2 = 2;
$peso3 = 3;
$peso4 = 4;

//2 4 6 8
$mediaPonderada = (($a * $peso1) + ($b * $peso2) + ($c * $peso3) + ($d * $peso4)) / 10;

echo "a média é de $mediaPonderada";