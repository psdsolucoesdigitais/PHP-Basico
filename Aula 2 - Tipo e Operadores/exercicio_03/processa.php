<?php

	$nome 			= "jose";
	$salario 		= 1000;
	$ie 			= 5;
	$setor 		 	= "alm";

	$perc = 0;

	if (($setor == "alm" || $setor == "adm") && $ie < 5)
	 {
	 	if ($salario >= 900 && $salario <= 1500) {
		 	$perc = 7.5;
		 	if ($ie >= 5 && $ie <= 8) {
		 		$perc = 8;
		 	} else if ($ie > 8){
		 		$perc = 11;
		 	}
		 } else if ($salario >= 1501 && $salario <= 1900) {
		 	$perc = 3;
		 } else if ($salario > 1900) {
		 	$perc = 2.5;
		 }
	}



	echo $salario + ($salario * $perc / 100);