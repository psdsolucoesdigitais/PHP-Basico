<?php

// essa classe representa a tabela aluno, que tem id pk, matricula, nome
class Aluno {

	//atributos, colunas na tabela do banco de dados
	public 	$id;
	public 	$matricula;
	public	$nome;

	//métodos mágicos
	public function __construct($p1, $p2, $p3) {
		$this->id 			= $p1;
		$this->matricula 	= $p2;
		$this->nome 		= $p3;
	}

	//métodos, é tudo de funcionalidade que essa tabela pode fazer, e o que podemos fazer com seus registros.
	public function inserir() {
		return "nova matricula: " . ++$this->matricula;
	}

	public function editar() {
		
	}
}

