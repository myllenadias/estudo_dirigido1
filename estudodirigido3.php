/*3. Faça um programa que calcule o aumento de um salário. Ele deve solicitar o valor do salário e a
porcentagem do aumento. Exiba o valor do aumento e do novo salário.*/

<?php

print "Digite o valor do salário atual \n";
$atual= fgets (STDIN);

print"Digite a porcentagem do aumento de salário \n";
$porcentagem_aumento= fgets (STDIN);

$porcentagem= $porcentagem_aumento/100;

$aumento= $atual*$porcentagem;

$novo_salario= $atual+ $aumento;

print "O novo salário é de $novo_salario reais\n";

print"O valor de aumento é de $aumento reais";
