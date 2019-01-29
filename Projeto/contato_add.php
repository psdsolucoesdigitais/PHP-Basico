<?php

	require "Conexao.php";
	require "Contato.php";

	$id 		= $_POST["id"];
	$nome 		= $_POST["nome_contato"];
	$telefone 	= $_POST["telefone_contato"];

	$contato = new Contato($id, $nome, $telefone);

	if ($id) {
		$contato->atualizar();
		header("location: principal.php?msg=ok");
	} else {
		$contato->inserir();
		header("location: principal.php?msg=ok");
	}

/*
	{
		header("location: principal.php?msg=falha");
	}
*/