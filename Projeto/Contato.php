<?php

class Contato {
	public $id;
	public $nome;
	public $telefone;

	public function __construct($id="", $nome="", $telefone="") {
		$this->id 		= $id;
		$this->nome 	= $nome;
		$this->telefone = $telefone;
	}

	public function inserir() {
		$con 		= new Conexao();
		$nome		= $this->nome;
		$telefone 	= $this->telefone;

		$sql = "INSERT INTO contato (nome, telefone) VALUES ('$nome', '$telefone') ";
		$retorno = $con->exec($sql);

		return $retorno ? true : false;
	}

	public function atualizar() {
		$con 		= new Conexao();
		$id			= $this->id;
		$nome		= $this->nome;
		$telefone 	= $this->telefone;

		$sql = "UPDATE contato set nome='$nome'
				, telefone='$telefone' where id = $id ";
		$retorno = $con->exec($sql);

		return $retorno ? true : false;
	}

	public function deletar() {
		$con 	= new Conexao();
		$id		= $this->id;

		$sql = "DELETE FROM contato WHERE id = $id";
		$retorno = $con->exec($sql);

		return $retorno ? true : false;
	}

	public function listar() {
		$con 		= new Conexao();

		$sql = "SELECT * FROM contato";
		$retorno = $con->query($sql)->fetchAll();

		$ret = [];
		foreach ($retorno as $contato) {
			$ret[] = new Contato($contato["id"], $contato["nome"], $contato["telefone"]);
		}
		return $ret;
	}
}