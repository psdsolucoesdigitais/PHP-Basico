<?php

	//sessão

	#

	$_SESSION["usuario.nome"] 	= "jose maria";
	$_SESSION["usuario.cartao"] = "1212909023238989";
	$_SESSION["usuario.senha"] 	= "123";

	header("location: principal.php");
	
