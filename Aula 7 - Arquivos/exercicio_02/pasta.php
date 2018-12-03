<?php
	
	

	if (!file_exists("CLIENTE")) {
		$a = mkdir("CLIENTE", 0755);
		var_dump($a);
	}

	//criar diretório recursivo
	$a = mkdir("CLIENTE/1/fotos/da", 0755, 1);
	var_dump($a);
	

	
