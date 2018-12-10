<?php

class Conexao{
	function iniciar_conexao() {
		return new PDO("mysql:host=localhost;dbname=agenda", "root", "");
	}	
}

