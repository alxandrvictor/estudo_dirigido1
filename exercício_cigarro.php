<?php
    print "Quantos cigarros você fuma por dia? ";
    $cigarros_por_dia = fgets(STDIN);
    print "Quantos anos você fuma? ";
    $anos_fumados     = fgets(STDIN);

    $cigarros_fumados = $cigarros_por_dia*$anos_fumados*365;
    $minutos_perdidos = $cigarros_fumados * 11;
    $horas_perdidos   = $minutos_perdidos / 60;
    $dias_perdidos    = round($horas_perdidos / 24);

    print "Você perdeu $dias_perdidos dias de vida";