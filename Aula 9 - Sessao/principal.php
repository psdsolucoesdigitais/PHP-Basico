<?php
	session_start();

	if (!isset($_SESSION["nome.usuario"])) {
		header("location: index.php?msg=Acesso negado");
		die;
	}

?>

Olá <?php echo $_SESSION["nome.usuario"] ?> seja bem vindo,
<a href="sair.php">[Sair]</a>