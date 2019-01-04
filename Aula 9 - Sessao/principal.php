<?php

	//sessão

	#

	if (!isset($_SESSION["usuario.nome"])) {
		header("location: login.php");
		die;
	}


	echo "Olá " . $_SESSION["usuario.nome"];