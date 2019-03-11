<?php
	print"Quantidade de dias: ";
	$dias = (int)fgets(STDIN);          //Insira os dias
	print"\n\n";

	print"Quantidade de horas: ";
	$horas = (int)fgets(STDIN);         //Insira as horas
	print"\n\n";

	print"Quantidade de minutos: ";
	$minutos = (int)fgets(STDIN);       //Insira os minutos
	print"\n\n";

	print"Quantidade de segundos: ";
	$segundos = (int)fgets(STDIN);     // Insira os segundos
	print"\n\n";

	$totalseconds = ((($dias/24/60/60)+$horas/60/60)+$minutos/60)+$segundos;

	print"$dias dias, $horas horas, $minutos minutos, segundos, são $totalseconds segundos"; //Término
	print"\n\n"
