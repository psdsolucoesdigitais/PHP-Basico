<?php
	require "conexao.php";

	$n = $_POST["nome"];
	$f = $_POST["fone"];

	//file_put_contents("banco_de_dados.txt", $n."-".$f.PHP_EOL, FILE_APPEND);
	//$con = new PDO('mysql:host=localhost;dbname=agenda', 'root', '');

	$sql = "INSERT INTO contato (nome, telefone)
			VALUES ('$n', '$f')";

	$con->query($sql);

	header("Location: index.php");
	die;

	// template de inserir
	/* INSERT INTO 
		<tabela> (<campo1>, <campo2>)
	   VALUES ('<valor1>', '<valor2>')

	   template de recuperar

	    SELECT <campo1>,<campo2>
		FROM <tabela>
	*/
	