<?php

	require "Conexao.php";
	require "Contato.php";

	$id 		= $_GET["id"];

	$contato = new Contato($id);

	if ($contato->deletar()) {
		header("location: principal.php?msg=ok");
	} else {
		header("location: principal.php?msg=falha");
	}