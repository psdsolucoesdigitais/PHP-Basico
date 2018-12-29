<?php
	
	$r=20;
	do {
		echo $r."<br>";
		$r--;
	} while($r>=1);


	$r=1;
	do {
		echo $r."<br>";
		$r++;
	} while($r<=20);
	
	die;

	// de 20 a 1
	for ($a=20; $a>=1; $a--) {
		echo $a."<br>";
	}
	
	die;
	// de 1 a 20
	for ($a=1; $a<=20; $a++) {
		echo $a."<br>";
	}

	die;

	$a = 10;
	while ($a>=1) {
		echo $a."<br>";
		$a--;
	}