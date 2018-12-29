<?php

	$n1 		= $_POST["n1"];
	$n2 		= $_POST["n2"];
	$op 		= $_POST["op"];
	$ordem 		= $_POST["ordem"];
	$incremento = $_POST["incremento"];

	if ($ordem == "asc") {
		if ($op == "for") {
			for(	; $n1<=$n2; $n1+=$incremento) {
				echo $n1."<br>";
			}
		}
	} else {// desc
		if ($op == "for") {
			for(	; $n2>=$n1; $n2-=$incremento) {
				echo $n2."<br>";
			}
		} else if ($op == "while") {
			while(....) {
				.....
			}
		}

	}
