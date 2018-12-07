<?php
	session_start();
	$con 	= new PDO("mysql:host=localhost;dbname=agenda", "root", "");

	$login 	= $_POST["login"];
	$senha 	= $_POST["senha"];

	$sql = "SELECT * FROM usuario WHERE login='$login' and senha='$senha' ";

	$retorno = $con->query($sql)->fetchAll();

	if (isset($retorno[0]["login"])) {
		$_SESSION["nome.usuario"]   = $retorno[0]["login"];
		header("location: principal.php");
	} else {
		header("location: index.php?msg=Login inválido.");
	}