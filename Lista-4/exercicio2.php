<?php

    $num = [];

    $negativos = 0;
    $positivos = 0;
    $pares = 0;
    $impares = 0;
    
    for ($i = 0; $i < 10; $i++) {

        $num[$i] =(int) readline("Digite algum numero: ");

        if ($num[$i] < 0 ) {
            $negativos++;
        } else if($num[$i] > 0) {
            $positivos++;
        }

        if ($num[$i] % 2 == 0) {
            $par++;
        } else {
            $impares++;
        }

    }

    echo "numeros negativos: $negativos \n";
    echo "numeros positos: $positivos \n";
    echo "numeros pares: ares \n";
    echo "numeros Impares: $impares \n";
    

   