<?php

	//arquivos

	//$resultado = mkdir("fotos/cv/minuatura", 0777, true);
	//$resultado = rmdir("fotos");//diretórios vazios

	#$a = fopen("banco_de_dados.txt", "a");
	#fwrite($a, " como vai?");
	#fclose($a);
	/*
		r 	- leitura
		r+	- leitura e escrita, arquivo precisa existir
		w 	- escrita
		w+	- leitura e escrita, caso o arquivo não exista ele tentar criar caso tenha permissão
		a 	- escrita
		a+	- leitura e escrita, caso o arquivo não exista ele tentar criar caso tenha permissão
		x 	- escrita
		x+	- leitura e escrita, cria o arquivo caso tenha permissão e caso exista dá erro
	*/
	//file_put_contents("banco_de_dados.txt", "marta".PHP_EOL, FILE_APPEND);

	/*
	$b = fopen("banco_de_dados.txt", "a+");
	while (!feof($b)) {//fseek
		echo fgets($b)."<br>";
	}
	fclose($b);
	*/
	#$texto = file_get_contents("banco_de_dados.txt");
	#echo nl2br($texto);

	$retorno = file("banco_de_dados.txt");
	foreach ($retorno as $chave => $valor) {
		echo "minha chave e $chave, meu valor é $valor <br>";
	}




