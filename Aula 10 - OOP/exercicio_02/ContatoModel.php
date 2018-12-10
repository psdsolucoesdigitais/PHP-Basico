<?php

include "Conexao.php";

class ContatoModel {
	function inserir($rrr) {
		$c 		 = new Conexao;
		$conexao = $c->iniciar_conexao();

		$nom = $rrr->nome;
		$tel = $rrr->telefone;
		$cpf = $rrr->cpf;

		$sql = "INSERT INTO contato (nome, telefone, cpf)
				VALUES ('$nom', '$tel', '$cpf')";
		$conexao->query($sql);
	}

	function totalPorSexo() {
		$c 		 = new Conexao;
		$conexao = $c->iniciar_conexao();

		$sql = "select count(sexo), sexo from contato GROUP BY sexo";
		return $conexao->query($sql)->fetchAll();
	}
}