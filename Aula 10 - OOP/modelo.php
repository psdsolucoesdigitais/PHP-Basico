<?php

	#Orientação a objetos - início

	require "Aluno.php";

	$a 			= new Aluno(1, 2019001, "jose");
	$resultado 	= $a->inserir();

	var_dump($resultado);