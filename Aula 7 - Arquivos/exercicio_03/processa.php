<?php

	$nome = $_POST["nome"];
	$foto = $_FILES["foto"];

	if (!file_exists($nome)) {
		mkdir($nome);
	}

	if (move_uploaded_file($foto["tmp_name"], $nome."/".$foto["name"])) {
		header("location: formulario.php?msg=Sucesso.");
		die;
	} else {
		header("location: formulario.php?msg=Falha.");
		die;
	}