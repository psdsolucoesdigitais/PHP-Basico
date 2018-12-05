<form action="processa.php" method="post">
	Nome: <input type="text" name="nome">
	<br>
	Telefone: <input type="text" name="fone">
	<br>
	<input type="submit" value="Inserir">
</form>

<?php
	require "conexao.php";
	foreach ($con->query("SELECT * FROM contato") as $p) {
		echo $p["nome"]." - ".$p["telefone"]."<br>";
	}
?>