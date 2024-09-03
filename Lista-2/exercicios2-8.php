<?php 

$valor = readline("Digite o valor do produto: \n");
$condicaoPagamento = readline("Digite uma opção de pagamento: 1 -Dinheiro \n 2 - À vista no cartão \n 3 - 2x no cartão \n 4 - 3x no cartão: \n");

//valor das condições de pagamento:
$dinheiro = $valor * 0.10;
$vistaCartao = $valor * 0.05;
$cartao2x = $valor;
$cartao3x = $valor * 0.10;

//condições de pagamento
switch ($condicaoPagamento){

    case 1:
        $precoAPagar = $valor - $dinheiro;
        echo $precoAPagar . "\n";
        break;

    case 2:
        $precoAPagar = $valor - $vistaCartao;
        echo $precoAPagar . "\n";
        break;

    case 3:
        echo $cartao2x . "\n";
        break;

    case 4:
        $precoAPagar = $valor + $cartao3x;
        echo $precoAPagar . "\n";
        break;

}

