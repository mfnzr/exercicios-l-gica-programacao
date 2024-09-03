<?php

//Faça um algoritmo que leia o ano de nascimento de uma pessoa, calcule e mostre sua idade, e também informe se ela já pode votar (16 anos ou mais) e tirar a Carteira de Habilitação (18 anos ou mais).

$anoNascimento = readline("Digite o ano de nascimento: \n");

$idade = 2024 - $anoNascimento;
echo $idade . "\n";

if ($idade >= 16 && $idade < 18) {

    echo "Já pode votar porém não pode tirar a carteira de habilitação \n";

} else if ($idade >= 18) {

    echo "Já pode votar e tirar a carteira de habilitação! \n";

} else {

    echo "Não pode votar nem tirar a carteira de habilitação \n";

}