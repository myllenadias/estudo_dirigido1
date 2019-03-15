<?php

    print "Qual o tamanho em metros quadrados da área a ser pintada? ";
    $tamanho_metros = fgets (STDIN);


//18L = 108m²
//3,6L = 21,6m²

//Folga

    $area_folga = $tamanho_metros+(($tamanho_metros*10)/100);

//Apenas latas de 18L

    $quantidade_lata = ceil($area_folga/108);
    $Preco_lata = $quantidade_lata*80;

print "Você precisará de $quantidade_lata lata(s) de 18L. \n";
print "Comprar as latas custará um total de " .'R$' ."$Preco_lata. \n";
print "\n";
print "ou \n";
print "\n";

//Apenas galões de 3,6L

    $quantidade_galao = ceil($area_folga/21.6);
    $preco_galao = $quantidade_galao*25;

print "Você precisará de $quantidade_galao galão(ões) de 3,6L. \n";
print "Comprar os galões custará um total de " .'R$' ."$preco_galao. \n";
print "\n";
print "ou \n";
print "\n";

//Latas de 18L e galões de 3,6L misturados

    $quantidade_galao2 = $quantidade_galao;
    $quantidade_lata2 = 0;

//1 lata = 5 galões

if ($quantidade_galao2 >= 5) {

    $quantidade_lata2 = ceil($quantidade_galao2/5);
    $quantidade_galao2 = ceil($quantidade_galao2%5);

}

    $Total_a_pagar = ($quantidade_galao2*25)+($quantidade_lata2*80);

print " Você precisará de $quantidade_galao2 galão(ões) e $quantidade_lata2 lata(s) de tinta. \n";
print "O total a pagar será de " .'R$' ."$Total_a_pagar";

