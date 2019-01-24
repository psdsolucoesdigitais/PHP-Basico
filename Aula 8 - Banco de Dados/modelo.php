<?php

	// banco de dados

	/* Connect to a MySQL database using driver invocation */

	//$Nome = 
	
	include "conexao.php";

	$sql = "INSERT INTO aluno (matricula, nome)
			VALUES ('$matricula', '$nome')";

	$resultado = $conexao->query($sql);

	header("location: listagem.php");
	
