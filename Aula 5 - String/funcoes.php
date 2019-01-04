<?php
	/*
		Funções nativas de string
			string										
				OK explode
				OK implode | join
				OK trim | ltrim | rtrim
				nl2br - para se trabalhar em arquivo.
				OK number_format
				OK str_replace
				OK str_repeat
				OK str_shuffle
				OK substr
				OK str_split
				OK strip_tags
				OK strlen
				OK strpos | stripos | strrpos | strripos
				OK strrev
				OK strtolower
				OK strtoupper
				OK ucfirst
				OK ucwords			
	*/
	
	$texto  = "eu encontrei algo no texto encontrei";
	$texto2 = str_split($texto, 4);

	var_dump($texto2);