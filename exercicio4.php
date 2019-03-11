<?php

    print"Informe o preço de determinada mercadoria: ";
    $mercadoria = fgets(STDIN);
    print"\n\n";

    print"Informe o desconto recebido: ";
    $desconto = fgets(STDIN) * $mercadoria;
    print"\n\n";

    $preçodescount = $mercadoria - $desconto;

    print"O valor do produto com o desconto será de $preçodescount reais";
    print"\n\n";
