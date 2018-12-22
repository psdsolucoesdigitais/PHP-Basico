<?php

	$nome 		= $_POST["nome"];
	$salario 	= $_POST["salario"];
	$percentual = $_POST["percentual"];

	// fórmula do percentual com retorno em reais.
	$aumento	= $salario * $percentual / 100;

	echo "Sr(a) $nome, seu salário anterior era $salario".
	", teve aumento de $aumento e seu novo salário é ".
	($salario + $aumento);