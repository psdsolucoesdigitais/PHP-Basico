<?php

	# função.

	
	function soma($p1, &$p2) {
		//operações
		$p1++;
		$p2++;
		return $p1 + $p2;
	}

	$a1 = 10;
	$a2 = 20;

	echo soma($a1, $a2);

	echo "<br>";

	echo " valor de a1 $a1 e valor de a2 $a2";


