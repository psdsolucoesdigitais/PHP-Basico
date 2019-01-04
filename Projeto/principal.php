<?php

require "valida_logado.php";
require "Conexao.php";
require "Contato.php";


?>
<a href="form_cadastro.php">Cadastrar Novo</a><br>

<h2>Listagem</h2>
<br><br>
<?php
	$contato = new Contato;
	foreach ($contato->listar() as $b) {
		echo $b->nome." - ".$b->telefone."<a href='contato_delete.php?id=".$b->id."'>[Excluir]</a><br>";
	}
?>

