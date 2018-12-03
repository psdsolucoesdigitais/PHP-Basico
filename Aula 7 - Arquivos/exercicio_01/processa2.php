<?php

	@$nome = $_POST["nome"];
	$fone  = isset($_POST["fone"]) ? $_POST["fone"] : null;

	file_put_contents("banco.txt", $nome."-".$fone.PHP_EOL, FILE_APPEND);
	
	header("location: formulario.php?msg=Cadastrado com sucesso!");
	die;