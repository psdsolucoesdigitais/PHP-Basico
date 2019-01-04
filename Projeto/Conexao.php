<?php

require "config.php";

class Conexao extends PDO {
	public function __construct() {
		parent::__construct("mysql:dbname=".DATABASE.";host=".HOST, USER, PASS);
	}

}