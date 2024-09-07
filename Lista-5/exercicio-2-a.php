<?php

//Leia um número inteiro e retorne true se o número é múltiplo de 4 e false se o número não é múltiplo de 4.

function numeroMultiplo ($num) {

    if ($num % 4 == 0) {
        return true;
    } else{
        return false;
    }
}

$num = readline("Digite um número:");


if(numeroMultiplo($num)) {
    echo "é multiplo de 4 \n";
} else {
    echo "não é multiplo de 4 \n";
}

