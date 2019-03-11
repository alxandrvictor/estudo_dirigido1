<?php

    print"Qual a temperatura em Célsius? ";
    $celsius = (int)fgets(STDIN);
    print"\n\n";

    $conversao = (9*$celsius/5)+32;

    print"A temperatura em Fahrenheit será $conversao graus";
    print"\n\n";
