<?php

	$nome  	= "Maria";
	$idade  = "11";
	$cabelo = "preto";
	$olhos  = "castanho";
	$altura = "1.39";

	$resultado = "Reprovada.";
	if ($idade > 10) {
		if ($olhos == "castanho") {
			if ($altura > 1.40) {
				if ($cabelo == "preto") {
					$resultado = "Aprovada.";
				}
				if ($cabelo == "ruivo") {
					$resultado = "Aprovada.";
				}
			}
		}
	}

	echo $resultado;