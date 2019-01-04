<?php
	
	//session_start();
	require "Conexao.php";
	require "Usuario.php";
	
	$login = $_POST["login"];
	$senha = $_POST["senha"];

	//$id, $nome, $login, $senha
	$usuario = new Usuario("", "", $login, $senha);

	if ($nome_usuario = $usuario->valida_login()) {//retornar true or false

		$_SESSION["usuario.nome"] = $nome_usuario;

		header("location: principal.php");
		die;
	} else {
		header("location: index.php");
		die;
	}
