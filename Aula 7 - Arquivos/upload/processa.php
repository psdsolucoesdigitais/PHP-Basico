<?php
	$arq  = $_FILES["documento"];
	$nome = $_POST["nome"];
	if (!file_exists("foto")) {
		mkdir("foto");
	}
	move_uploaded_file($arq["tmp_name"], "foto/".$arq["name"]);
	file_put_contents("teste.txt", $nome.";".$arq["name"].PHP_EOL, FILE_APPEND);
	header("location: formulario.php");
	
		




	

	