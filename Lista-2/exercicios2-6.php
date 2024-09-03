<?php 

//Ler dois valores (considere que não serão lidos valores iguais) e escrever o maior deles.

$valor1 = readline("Digite o valor 1: \n");
$valor2 = readline("Digite o valor 2: \n");

if ($valor1 === $valor2) {
    
    echo "Digite valores diferentes \n";
    
} else {

    echo $valor1 . "\n";
    echo $valor2 . "\n";

}

if ($valor1 === $valor2){

    

}elseif ($valor1 > $valor2) {

    echo $valor1 . "\n";

} else {

    echo $valor2 . "\n";
}