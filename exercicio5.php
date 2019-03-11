<?php

    print"Qual a distância a ser percorrida? ";
    $distancia = fgets(STDIN);
    print"\n\n";

    print"Qual seria a velocidade média a ser alcançada? ";
    $velocidade = fgets(STDIN);
    print"\n\n";

    $tempo = round($distancia / $velocidade);

    print"O tempo da viagem será $tempo horas";
    print"\n\n";
