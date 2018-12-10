<?php
	
	include "Contato.php";
	include "ContatoModel.php";

	$nome 		= $_POST["nome"];
	$telefone 	= $_POST["telefone"];
	$cpf 		= $_POST["cpf"];

	$contato 			= new Contato;
	$contato->nome 		= $nome;
	$contato->telefone 	= $telefone;
	$contato->cpf 		= $cpf;

	$contatoModel = new ContatoModel;
	$contatoModel->inserir($contato);	

	echo "fim";