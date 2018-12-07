<?php
	session_start();

	if (!isset($_SESSION["usuario.sistema"])) {
		header("location: index.php?msg=Não Autorizado");
		die;
	}

?>

Olá <?php echo $_SESSION["usuario.sistema"] ?>, seja bem vindo.
<a href="sair.php">[Sair]</a>