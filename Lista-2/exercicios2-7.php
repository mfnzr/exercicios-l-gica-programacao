<?php

$idade = readline("Digite a idade: \n");

if($idade <= 4) {
    
    echo "não tem idade o suficiente para nadar \n";
    
} elseif ($idade >= 5 && $idade <=7) {

    echo "categoria Infantil A \n";

} elseif ($idade >= 8 && $idade <= 10) {

    echo "categoria Infantil B \n";

} elseif ($idade >= 11 && $idade <= 13) {

    echo "categoria Juvenil A \n";

} elseif ($idade >= 14 && $idade <= 17) {

    echo "categoria Juvenil B \n";

} else {

    echo "categoria Sênior \n";
}