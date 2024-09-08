<?php

function calcularPesoIdeal($altura, $sexo) {
    if ($sexo == 'M') { 
        return 72.7 * $altura - 58;
    } elseif ($sexo == 'F') { 
        return 62.1 * $altura - 44.7;
    } else {
        return null; // Sexo inválido
    }
}

$altura = readline("Digite a altura: \n"); 
$sexo = readline("Digite 'M' para sexo masculino ou 'F' para Feminino"); 


if ($altura > 0) {
    $pesoIdeal = calcularPesoIdeal($altura, $sexo);

    if ($pesoIdeal !== null) {
        echo "O peso ideal para uma pessoa de sexo $sexo e altura $altura m é: " . number_format($pesoIdeal, 2) . " kg.";
    } else {
        echo "Sexo inválido. Use 'M' para masculino ou 'F' para feminino.";
    }
} else {
    echo "Altura inválida. A altura deve ser um número positivo.";
}

