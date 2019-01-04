<?php

class Usuario {
	public $id;
	public $nome;
	public $login;
	public $senha;

	public function __construct($id, $nome, $login, $senha) {
		$this->id 		= $id;
		$this->nome 	= $nome;
		$this->login 	= $login;
		$this->senha 	= $senha;
	}

	public function valida_login() {
		$con 	= new Conexao();
		$login 	= $this->login;
		$senha 	= $this->senha;

		$sql = "SELECT * FROM usuario WHERE login='$login' and senha='$senha' ";
		$retorno = $con->query($sql)->fetch();

		return $retorno ? $retorno["nome"] : false;
	}
}