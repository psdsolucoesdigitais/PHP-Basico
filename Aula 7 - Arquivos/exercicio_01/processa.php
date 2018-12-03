<?php

	@$nome = $_POST["nome"];
	$fone = isset($_POST["fone"]) ? $_POST["fone"] : null;

	$arquivo = fopen("banco.txt", "a");
	fwrite($arquivo, "a".PHP_EOL);
	fwrite($arquivo, "b".PHP_EOL);
	fclose($arquivo);

	$arquivo = fopen("banco.txt", "r");
	while (!feof($arquivo)) {
		echo nl2br(fgets($arquivo));
	}
	fclose($arquivo);

	die;
	/*
		r leitura
		r+ leitura + escrita

		a escrita
		a+ leitura + escrita

		w escrita
		w+ leitura + escrita

		x escrita
		x+	 leitura + escrita
	*/