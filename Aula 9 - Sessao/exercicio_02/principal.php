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
<?php
$sql = "SELECT * FROM usuario";

$retorno = $con->query($sql)->fetchAll();

foreach ($retorno as $value) {
	echo $value["login"]
		. "<a href='excluir.php?identificador=".$value["id"]."'>Excluir</a><br>";
}
?>