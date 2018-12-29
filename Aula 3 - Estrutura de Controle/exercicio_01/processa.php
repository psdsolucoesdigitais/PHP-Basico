<?php

	$n1 = $_POST["n_1"];
	$n2 = $_POST["n_2"];
	$op = $_POST["op"];

	if ($op == "for") {
		echo "utilizando o for<Br>";
		for (; $n1<=$n2 ; $n1++) { 
			echo $n1."<br>";
		}
	} else if ($op =="while") {
		echo "utilizando o while<Br>";
		while ($n1<=$n2) {
			echo $n1."<br>";
			$n1++; 
		}
	}else if ($op =="do") {
		echo "utilizando o do...while<Br>";
		do {
			echo $n1."<br>";
			$n1++; 
		} while($n1<=$n2);
	}else if ($op =="foreach") {
		echo "utilizando o foreach<Br>";
		for (; $n1<=$n2 ; $n1++) { 
			$x[] = $n1; 
		}

		foreach ($x as $y) {
			echo $y."<br>";
		}
	}


