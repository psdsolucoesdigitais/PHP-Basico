<?php
	
	require "Calculadora.php";

	$n1  = 10;
	$n2  = 3;
	$ope = "sub";

	$c = new Calculadora;
	echo $c->calcula($n1, $n2, $ope);
