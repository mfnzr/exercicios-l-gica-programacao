<?php

//Leia um número inteiro e retorne true se o número é par e false se o número é ímpar.

$numero = readline("Digite um número:");

function parOuImpar($numero) {
    if ($numero % 2 == 0)  {
        echo "$numero é par.";
    } else {
        echo "$numero é ímpar.";
    }
}

parOuImpar($numero);