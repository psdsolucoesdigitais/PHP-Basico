<?php

	$idade 		= $_POST["idade"];
	$sexo 		= $_POST["sexo"];
	$cor_olhos 	= $_POST["cor_olhos"];

	$resultado = "Reprovado";
	if ($sexo == "feminino") {
		if ($cor_olhos == "azuis" || $cor_olhos == "verdes") {
			if ($idade >= 3 && $idade <= 8) {
				$resultado = "Aprovado";
			}
		}
	}

	echo $resultado;