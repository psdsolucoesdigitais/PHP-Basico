<?php

	$nome = $_POST["nome"];
	$foto = $_FILES["imagem"];

	if (!file_exists("fotos")) {
		mkdir("fotos");
	}

	$extensao 		= substr($foto["name"], -3);//jpg png gif
	$nome_sugestao  = substr(str_shuffle("abcdefrgtyhjukllp"), 0, 5).".".$extensao;

	file_put_contents("meu_banco_de_dados.txt", $nome.";".$nome_sugestao.PHP_EOL, FILE_APPEND);

	if (move_uploaded_file($foto["tmp_name"], "./fotos/$nome_sugestao")) {
		header("location: ./formulario.php?msg=ok");
		die;
	} else {
		header("location: ./formulario.php?msg=falha");
		die;
	}
	