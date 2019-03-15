/*6. Converta uma temperatura digitada em Celsius para Fahrenheit. F = 9*C/5 + 32.*/

<?php

    print "Digite uma temperatura celsius: ";
    $temperatura_celsius = fgets (STDIN);

    $temperatura_fahrenheit = 9* $temperatura_celsius/5 + 32;

    print " A temperatura $temperatura_celsius em Celsius convertida para Fahrenheit fica $temperatura_fahrenheit °F ";

