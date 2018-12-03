<?php

	@$nome = !empty(trim($_POST["nome"])) ? $_POST["nome"] : "Não digitado";
	$fone  = isset($_POST["fone"]) && !empty(trim($_POST["fone"])) 
			 ? $_POST["fone"] : "Não digitado";

	$arquivo = fopen("banco.txt", "a+");
	while (!feof($arquivo)) {
		#echo nl2br(fgets($arquivo));
		echo fgets($arquivo, 4)."<br>";
	}
	fclose($arquivo);

	die;

	$arquivo = fopen("banco.txt", "a");
	fwrite($arquivo, "Teste 123".PHP_EOL);
	fclose($arquivo);

	die;

	$arquivo = fopen("banco.txt", "r+");
	fwrite($arquivo, "PHP ");
	fclose($arquivo);



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