<?php

	session_start();

	require "conexao.php";

	$l = $_POST["login"];
	$s = $_POST["senha"];

	$u = $conexao->query("SELECT * FROM usuario WHERE login='$l' AND senha='$s'")->fetchAll();
	if ($u) {
		$_SESSION["usuario.nome.ativo"] = $u[0]["login"];
		header("location: principal.php");
		die;
	} else {
		header("location: index.php");
		die;
	}

	