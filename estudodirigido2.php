/*2. Escreva um programa que leia a quantidade de dias, horas, minutos e segundos do usuário. Calcule o
total em segundos.*/

<?php

print "Digite os dias \n";
$dias= fgets (STDIN);

print "Digite as horas \n";
$horas= fgets (STDIN);

print "Digite os minutos \n";
$minutos= fgets (STDIN);

print "Digite os segundos \n";
$segundos= fgets (STDIN);

$diahoras=$dias*24;

$totalhoras=$diahoras + $horas;

$horamin= $totalhoras*60;

$totalmin= $minutos + $horamin;

$minseg= $totalmin*60;

$totalseg= $segundos + $minseg;

print "O total de segundos é $totalseg";
