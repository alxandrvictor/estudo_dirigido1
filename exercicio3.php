<?php

    print"Insira o seu salário: ";
    $salario = fgets(STDIN);
    print"\n\n";

    print"Insira a porcentagem do aumento de seu salário: ";
    $porcent = fgets(STDIN);
    print"\n";

    $aumento = ceil($salario*$porcent);

    print"O seu aumento será de $aumento reais.";
    print"\n\n";

    $novosalario = $salario + $aumento;
    print"\n";

    print"O seu novo salário será de $novosalario reais.";
    print"\n\n\n";
