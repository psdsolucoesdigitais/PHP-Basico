<?php
	session_start();

	// verificar se existe a sessão

	 require "conexao.php";

	$id = $_GET["identificador"];

	$con->exec("DELETE FROM usuario WHERE id=$id");

	header("location: principal.php");

