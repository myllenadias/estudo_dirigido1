<?php

print "Digite o valor da mercadoria \n";
$mercadoria= fgets (STDIN);

print"Digite o percentual de desconto \n";
$percentual_desconto= fgets (STDIN);

$percentual= $percentual_desconto/100;

$desconto= $mercadoria*$percentual;

$preco_pagar= $mercadoria - $desconto;

print "O preço a pagar é de $preco_pagar reais \n";

print"O valor de desconto é de $desconto reais";
