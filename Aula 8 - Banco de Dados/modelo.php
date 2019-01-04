<?php

	// banco de dados

	/* Connect to a MySQL database using driver invocation */
	
	$conexao = new PDO("mysql:dbname=escola;host=localhost", "root", "");

	$sql = "INSERT INTO aluno (matricula, nome)
			VALUES ('2019001', 'jose')";

	$resultado = $conexao->query($sql);

	var_dump($resultado);
	
