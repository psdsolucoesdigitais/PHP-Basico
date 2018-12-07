<?php
	session_start();

	$con = new PDO("mysql:host=localhost;dbname=agenda", "root", "");

	$a1 = $_POST["login"];
	$a2 = $_POST["senha"];

	$sql = "SELECT * FROM usuario WHERE login='$a1' and senha='$a2'";

	$retorno = $con->query($sql)->fetchAll();
	
	if (isset($retorno[0]["login"])) {
		$_SESSION["usuario.sistema"] = $retorno[0]["login"];
		header("location:principal.php");
	} else {
		header("location: index.php?msg=Login inválido.");
	}
