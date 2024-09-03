<?php

//Dadas a base e a altura de um retângulo, calcular o perímetro, a área e a diagonal.
$x = readline("Digite o valor da base: \n");
$y = readline("Digite o valor da altura: \n");
echo "Base: $x \n";
echo "Altura: $y \n";

//perímetro
$p = 2 * ($x + $y);
echo "valor do perímetro: $p \n";

//área
$a = $x * $y;
echo "valor da área: $a \n";

//diagonal
$d = ($x * 2) + ($y *2) / 2;
echo "valor da diagonal: $d \n";

?>