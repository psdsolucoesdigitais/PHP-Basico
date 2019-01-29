<?php

	require "conexao.php";

	$id = $_REQUEST["chave"];

	$conexao->query("delete from usuario where id = $id");

	header("location: principal.php");