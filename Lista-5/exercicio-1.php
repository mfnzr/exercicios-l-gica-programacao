<?php

//Escreva um programa com quatro funções diferentes, cada uma recebe dois números inteiros e realiza uma operação matemática diferente (soma, subtração, multiplicação e divisão) e retorna o resultado. A escolha da função a ser executada é decidida por uma variável inteira que é preenchida no início do programa juntamente com as outras duas variáveis com os valores do cálculo. O resultado deve ser apresentado no final da execução. Quando a função de divisão é utilizada, ela deve retornar uma mensagem de erro se ocorrer divisão por zero.

function soma ($num1, $num2){
    $num1 = readline("digite um número para somar:");
    $num2 = readline("digite outro número para somar:");
    echo $num1 + $num2;
    echo "\n";
}

soma(0, 0);


function subtracao ($num1, $num2){
    $num1 = readline("digite um número para subtrair:");
    $num2 = readline("digite outro número para subtrair:");
    echo $num1 - $num2;
    echo "\n";
}

subtracao(0, 0);


function multiplicacao ($num1, $num2){
    $num1 = readline("digite um número para multiplicar:");
    $num2 = readline("digite outro número para multiplicar:");
    echo $num1 * $num2;
    echo "\n";
}

multiplicacao(0, 0);


function divisao ($num1, $num2){
    $num1 = readline("digite um número para dividir:");
    $num2 = readline("digite outro número para dividir:");
    echo $num1 / $num2;
    echo "\n";
}

divisao(0, 0);
