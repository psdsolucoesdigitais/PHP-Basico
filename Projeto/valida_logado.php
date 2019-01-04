<?php

if (!$_SESSION["usuario.nome"]) {
	header("location: index.php?msg=não autenticado!");
	exit;//die;
}