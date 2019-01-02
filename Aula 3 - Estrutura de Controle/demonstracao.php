<?php

	// estruturas de controle e repetição

	$nome = ["jose", "maria", "marta", "joão"];// 2019002 => joão

	for ($x=0; $x<5; $x++) {

		foreach ($nome as $chave => $valor) {
			if ($valor == "marta") {
				break 2;
			}

			echo "minha chave é $chave com o valor $valor <br>";
		}
		echo "<Br>";
	}

	


	die;
	
	for ($i=0; $i < 10; $i++) { 
		# code...

		if ($i <= 5) {
			break;
		}

		echo "apenas números maiores que 5, valor do i $i.<br>";
	}

	die;

	$a = 10;
	do {
		echo $a."<br>";
		$a++;
	} while($a <= 20);

	die;

	$a = 10;
	while ($a <= 20) {
		echo $a . "<br>";
		$a++;
	}

	die;

	$nac = "fra";// bra, uru, arg, fra

	switch ($nac) {
		case 'fra':
			echo "frança";
		break;
		case 'bra':
			echo "brasileiro";
		break;
		case 'uru':
			echo "uruguai";
		break;
		case 'arg':
			echo "argentina";
		break;
		default:
			echo "sem nacionalidade";

	}

	die;

	if ($nac == "bra") {
		echo "brasileiro";
	} else if ($nac == "uru") {
		echo "uruguai";
	} elseif ($nac == "arg") {
		echo "argentina";
	} else {
		echo "sem nacionalidade";
	}

	die;

	