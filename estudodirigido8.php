<?php

    print "Quantos cigarros você fuma por dia? ";
    $cigarros_por_dia = fgets(STDIN);

    print "Há quantos anos você fuma? ";
    $anos_fumados = fgets(STDIN);

    $cigarros_fumados = $cigarros_por_dia*$anos_fumados*365;
    $minutos_perdidos = $cigarros_fumados * 10;
    $horas_perdidas   = $minutos_perdidos /60;
    $dias_perdidos    = round($horas_perdidas/24);

    
    print "Você perdeu $dias_perdidos dias de vida!";
    