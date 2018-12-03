<?php
/*
$a = fopen("banco.txt", "a+");
while(!feof($a)) {
	echo nl2br(fgets($a));
}
*/

//echo nl2br(file_get_contents("banco.txt"));

#var_dump(file("banco.txt"));die;

if (file_exists("banco.txt")) {
	foreach (file("banco.txt") as $p) {
		echo nl2br($p);
	}	
}
