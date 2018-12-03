<?php

	@$nome = $_POST["nome"];
	$fone  = isset($_POST["fone"]) && !empty(trim($_POST["fone"])) 
			 ? $_POST["fone"] : "Não digitado";

	if (!empty($nome)) { // if (trim($nome) != "") {
		file_put_contents("banco.txt", $nome.PHP_EOL, FILE_APPEND);	
		header("location: formulario.php?mensagem=Cadastro com sucesso!&mensagem2=Ok");
		die;
	}	
	
	header("location: formulario.php?mensagem=Preencha todos os campos");
	die;

	/*
	r leitura, o arquivo precisa existis
	r+ leitura + escrita

	a escrita, caso não exista tenta criar e coloca cursor ao final
	a+ leitura + escrita

	w escrita, tenta criar caso não exista e trunca o arquivo
	w+ leitura + escrita

	x escrita, tenta criar o arquivo, caso exista dá erro
	x+ leitura + escrita
	*/	