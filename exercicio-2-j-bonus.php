<?php

//Dada a hora, calcular quantos minutos se passaram desde o início do dia.
$hora = readline("Digite a hora:" . "\n");
$minutos = readline("Digite os minutos:" . "\n");

$minutosSePassaram = ($hora * 60) + $minutos;
echo $minutosSePassaram . "\n";

?>