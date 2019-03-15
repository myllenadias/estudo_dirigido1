<?php

    print "Digite uma temperatura celsius: ";
    $temperatura_celsius = fgets (STDIN);

    $temperatura_fahrenheit = 9* $temperatura_celsius/5 + 32;

    print " A temperatura $temperatura_celsius em Celsius convertida para Fahrenheit fica $temperatura_fahrenheit °F ";

