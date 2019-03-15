/*1. Escreva um programa que leia um valor em metros e o exiba convertido em milímetros.*/

<?php

print"Quantos metros você quer converter para centimetros?\n";
$metros= fgets (STDIN);

$milimetros= $metros*1000;

print"$metros metros da $milimetros milímetros";