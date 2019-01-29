<?php
	session_start();

	if (!isset($_SESSION["usuario.nome.ativo"])){
		header("location: index.php");
		die;
	}
	require "conexao.php";

	echo "Olá, ".$_SESSION["usuario.nome.ativo"];
?><a href="sair.php">[Sair]</a>
<br><br>
<?php
	foreach ($conexao->query("select * from usuario")->fetchAll() as $key => $value) {
?>
	<?php echo $value["login"] ?><a href="deletar.php?chave=<?php echo $value["id"] ?>">Deletar</a><br>
<?php
	}
?><br><br>
<a href="form_cad_professor.php">Cadastrar usuário</a><br>
