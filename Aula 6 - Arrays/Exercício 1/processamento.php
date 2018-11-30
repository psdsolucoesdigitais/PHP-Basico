<?php	
	$c   			= $_POST["chave"];
	$v   			= $_POST["valor"];
	$qtd 			= $_POST["quantidade"]-1;
	$tipo_ordenacao = $_POST["tipo_ordenacao"];

	$z = count($c);

	for ($x=0; $x<$z; $x++) {
		$novo[  $c[$x]  ] = $v[$x];
	}

	if ($tipo_ordenacao == "sort") {
		sort($novo);
	} else if ($tipo_ordenacao == "asort") {
		asort($novo);
	}
	// ....
	var_dump("<pre>", $novo);

	

