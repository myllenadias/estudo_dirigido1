<?php

    print "Qual a quantidade de km percorridos por seu carro alugado? ";
    $quilometros = fgets (STDIN);

    print "Qual a quantidade de dias que o carro foi alugado? ";
    $dias = fgets (STDIN);

    $valor_dia = $dias * 60;
    $valor_km = $quilometros * 0.15;

    $valor_total = $valor_dia + $valor_km;

    print "O valor total a pagar pelo carro alugado é de: $valor_total reais";


