/*5. Calcule o tempo de uma viagem de carro. Pergunte a distância a percorrer e a velocidade média esperada
para a viagem.*/

<?php

    print "Qual a distância que você irá percorrer? ";
    $distancia = fgets (STDIN);

    print "Qual a velocidade média esperada? ";
    $velocidademedia = fgets (STDIN);

    $tempo = $distancia/$velocidademedia;

    print "O tempo da viajem é de: $tempo horas";