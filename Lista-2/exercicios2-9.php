<?php

//Desenvolva um algoritmo que, dado um número, verifique se ele está entre 30 e 90 ou é maior que 120 ou não se encaixa em nenhuma dessas condições.

$numero = readline("Digite um número: \n");

if (($numero > 30 && $numero < 90) || ($numero > 120)) {

    echo $numero . "\n";
    echo "Fim! \n";

} else {

    echo "O número não se encaixa em nenhuma das condições! \n";

}