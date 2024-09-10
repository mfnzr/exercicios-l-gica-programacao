<?php

//Crie um vetor que armazene o nome de todos os meses do ano. Peça ao usuário que digite um número e ele informe qual o nome do mês correspondente. 

$meses = [

    1 => "Janeiro", 
    2 => "Fevereiro", 
    3 => "Março", 
    4 => "Abril", 
    5 => "Maio", 
    6 => "Junho", 
    7 => "Julho", 
    8 => "Agosto", 
    9 => "Setembro", 
    10 => "Outubro", 
    11 => "Novembro", 
    12 => "Dezembro"
];

    $numMes = (int)readline("digite um número de 1 a 12: \n");

    if ($numMes >= 1 && $numMes <= 12) {

        echo "O mês $numMes é: " . $meses[$numMes] . "\n";
    } else {

        echo "Atenção: o ano tem de 1 a 12 meses! Digite um número entre 1 e 12.\n";
    }