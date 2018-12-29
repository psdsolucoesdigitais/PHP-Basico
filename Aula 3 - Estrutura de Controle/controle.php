<?php

	// elemento = chave => valor
	$nome 	= ["zeladora"=>"joana", 201901=>"josé"];
	//$nome 	= array("joana", "josé");

	$nome["aluno"] = "matias";//201910 / 
	$nome["professora"] = "josefa";//
	
	foreach ($nome as $n) {
		echo " $n <br>";
	}

	die;

	$total = count($nome);
	for ($i=0; $i<$total; $i++) {
		echo "posição $i ==> " . $nome[$i]."<br>";
	}

	die;
	$i = 1;
	for (	; $i<=10	; $i++) {
		
		if ($i <= 3) {
			continue;
		}

		echo $i."<br>";
		
	}
	
	die;
	$r = 1;
	do {
		echo $r;
		$r++;
	} while($r>10);
	
	die;

	$c = 1;
	while ($c <= 100) {
		echo $c . "<br>";
		$c++;
	}
	
	die;

	$nome = "josé";

	switch ($nome) {
		case "joão":
			echo "meu nome não é João";
		break;
		case "josé":
			echo "meu nome é josé";
		break;
		default:
			echo "nenhuma das opções";
	}

	die;

	if ($idade < 1) {

	} else if ($idade < 2) {

	} else if ($idade < 3) {

	} else {

	}

	die;

	// operador ternário
	echo $idade <= 4 ? "verdadeiro" : "falso";

	if ($idade <= 4) {
		echo "verdadeiro";
	} else {
		echo "falso";
	}