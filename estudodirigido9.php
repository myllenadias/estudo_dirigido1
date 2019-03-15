/*9. (DESAFIO) Faça um Programa para uma loja de tintas. O programa deverá pedir o tamanho em metros
quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 6 metros
quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00 ou em galões de 3,6 litros,
que custam R$ 25,00. Informe ao usuário as quantidades de tinta a serem compradas e os respectivos
preços em 3 situações:*/

<?php

print "Informe a área a ser pintada em metro quadrado: \n";
$area_para_pintar =  fgets(STDIN);




/*a. comprar apenas latas de 18 litros*/

 


    $rendimento_lata = 108;
    $lata_preco = 80;
    $quantidade_latas = ceil ($area_para_pintar/ $rendimento_lata);
    $preco_total = round($quantidade_latas * $lata_preco);
  


    print "Você ira precisar de $quantidade_latas latas, custando R$$preco_total \n\n";



/*b. comprar apenas galões de 3,6 litros*/



    $galao_preco = 25;
    $galao_rendimento = 21.6; #6 * 3.6
    $quantidade_galao = ceil($area_para_pintar / $galao_rendimento);
    $preco_total = round($quantidade_galao * $galao_preco);


    print "Você ira precisar de $quantidade_galao latas, custando R$$preco_total \n\n";



/*c.misturar latas e galões, de forma que o preço seja o menor. Acrescente 10% de folga e sempre
arredonde os valores para cima, isto é, considere latas cheias.*/


    $area_para_pintar_folga = $area_para_pintar+(($area_para_pintar*10)/100);
    $quantidade_latas = (int) ($area_para_pintar_folga/$rendimento_lata);
    $resto = $area_para_pintar_folga % $rendimento_lata;
    $quantidade_galao = ceil($resto/$galao_rendimento); 
    $preco_total = ($quantidade_galao*25)+($quantidade_latas*80);
    



   print "Você ira precisar de $quantidade_latas latas de 18L e $quantidade_galao galões de 3,6L, totalizando o custo de R$$preco_total \n";


