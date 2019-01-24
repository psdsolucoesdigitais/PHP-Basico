





<?php
	// listagem de alunos

	include "conexao.php";

	$retorno = $conexao->query("select * from aluno")->fetchAll();

	foreach ($retorno as $aluno) {
		echo $aluno["nome"]."<br>";
	}

?>