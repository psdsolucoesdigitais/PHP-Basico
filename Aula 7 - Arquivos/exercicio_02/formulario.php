<form action="processa2.php" method="post">
	Nome: <input type="text" name="nome">
	<br>
	Telefone: <input type="text" name="fone">
	<input type="submit" value="Cadastrar">
</form>
<h4>
	<?php 
		echo isset($_GET["mensagem"]) ? $_GET["mensagem"] : "";
	?>
</h4>
<?php


require "ler_banco.php";

?>