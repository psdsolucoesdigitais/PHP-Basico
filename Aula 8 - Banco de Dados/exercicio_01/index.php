<?php
	#$nova_senha = 'abcsadfjksdsdfsdf012345';
	#$nova_senha = str_shuffle($nova_senha);
	#echo substr($nova_senha, 0, 6);die;
?>
<form action="processa.php" method="post">
	Nome: <input type="text" name="nome">
	<br>
	Telefone: <input type="text" name="fone">
	<br>
	<input type="submit" value="Inserir">
</form>

<a href="listar.php">Listar</a>

<?php
	require "conexao.php";
	foreach ($con->query("SELECT * FROM contato") as $p) {
		echo $p["nome"]." - ".$p["telefone"]."<br>";
	}
?>