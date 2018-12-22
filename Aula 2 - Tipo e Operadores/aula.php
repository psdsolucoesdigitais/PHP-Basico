<?php

	$sexo = "m";
	if ($sexo == "m") {
		$sexo = "masculino";
	} else {
		$sexo = "feminino";
	}
	echo $sexo;
	// operador ternário
	$sexo = $sexo=="m" ? "masculino" : "feminino";
	echo $sexo;


	die;


	$idade = 10;

	// < > <= >= == !=
	// && todas as verificações tem que ser verdadeiras
	// || se apenas uma for verdadeira a sentença inteira é verdadeira
	if ($idade <= 5 || $idade >= 10 ) {
		echo "ok";
	}
	

	die;


echo "<h3>Pós-incremento</h3>";
$a = 5;
echo "Deve ser x: " . $a++ . "<br />\n";
echo "Deve ser x: " . $a . "<br />\n";
echo "<h3>Pré-incremento</h3>";
$a = 5;
echo "Deve ser x: " . ++$a . "<br />\n";
echo "Deve ser x: " . $a . "<br />\n";
echo "<h3>Pós-decremento</h3>";
$a = 5;
echo "Deve ser x: " . $a-- . "<br />\n";
echo "Deve ser x: " . $a . "<br />\n";
echo "<h3>Pré-decremento</h3>";
$a = 5;
echo "Deve ser x: " . --$a . "<br />\n";
echo "Deve ser x: " . $a . "<br />\n";
	
	die;


	$a = 5;
	$a = $a + 1;
	$a -= 1; // += -= /= *=
	$a++;

	echo ++$a;
	echo "<br>";
	echo $a;

	die;




	// variáveis
	$idade = 5;

	//constante
	define('HOST', "localhost", true);
	echo host;



