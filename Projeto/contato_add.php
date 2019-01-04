<?php

	require "Conexao.php";
	require "Contato.php";

	$nome 		= $_POST["nome_contato"];
	$telefone 	= $_POST["telefone_contato"];

	$contato = new Contato(null, $nome, $telefone);

	if ($contato->inserir()) {
		header("location: principal.php?msg=ok");
	} else {
		header("location: principal.php?msg=falha");
	}