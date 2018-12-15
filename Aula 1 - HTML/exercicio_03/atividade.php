<?php
	
	//exercício 3
	/*
	Receba o sexo, nome do usuário e seu salário.

	- o programa vai exibir a seguinte mensagem:
		- 	Senhor/Senhora <variavel> você recebe menos um salário
			mínimo
		- 	Senhor/Senhora <variavel> você recebe mais que um salário mínimo
	*/



	//camelCase
	$nome  		= $_POST["nome_completo"];
	$salario  	= $_POST["salario"];
	$sexo  		= $_POST["sexo"];
	//com undescore/underline
	//$nome_completo = $_POST["nome_completo"];

	//$salario = 899;
	if ($salario >= 900) {
		echo "maior ou igual que 900";
	} else {
		echo "menor que 900";
	}
