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
		echo $b->nome." - ".$b->telefone
			."&nbsp;&nbsp; <a href='contato_delete.php?id=".$b->id."'>[Excluir]</a>"
			."&nbsp;&nbsp; <a href='form_cadastro.php?id=".$b->id."'>[Editar]</a>
			<br>";
	}
?>

