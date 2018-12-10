<?php

class Aluno {

	public $nome;
	public $matricula;
	public $data_nascimento;

	public function validar_matricula() {
		$matricula = 2020;
		return $this->matricula == 2018 ? 'valida' : 'invalida';
	}	

	function __construct($pNome, $pMatricula, $pNascimento) {
		$this->nome = $pNome;
		$this->matricula = $pMatricula;
		$this->data_nascimento = $pNascimento;
	}
}

