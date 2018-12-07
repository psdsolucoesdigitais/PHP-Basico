<?php
	session_start();

	if (!isset($_SESSION["usuario.sistema"])) {
		header("location: index.php?msg=Não Autorizado");
		die;
	}
	require "conexao.php";
?>

Olá <?php echo $_SESSION["usuario.sistema"] ?>, seja bem vindo.
<a href='sair.php'>[Sair]</a>
<br><Br>

<form>
	Pesquisar: 
	<input type="text" name="pesq" value="<?php echo $_GET["pesq"] ?>">
	<input type="submit" value="Pesquisar">
</form>
<?php

	$sql 			 = "SELECT * FROM usuario";
	$nome_pesquisado = $_GET["pesq"];

	if (isset($nome_pesquisado)) {
		$sql .= " WHERE login like '%$nome_pesquisado%' ";
	}

$retorno = $con->query($sql)->fetchAll();

foreach ($retorno as $value) {
	echo $value["login"]
		. "<a href='excluir.php?identificador=".$value["id"]."'>Excluir</a><br>";
}
?>