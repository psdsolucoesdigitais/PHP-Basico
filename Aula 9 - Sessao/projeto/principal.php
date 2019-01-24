<?php
	session_start();

	if (!isset($_SESSION["usuario.nome.ativo"])){
		header("location: index.php");
		die;
	}


	echo "Olá, ".$_SESSION["usuario.nome.ativo"];
?><a href="sair.php">[Sair]</a>
<br><br>

<a href="form_cad_professor.php">Cadastrar professor</a><br>
<a href="form_cad_professor.php">Cadastrar turma</a><br>
<a href="form_cad_professor.php">Cadastrar materia</a><br>
