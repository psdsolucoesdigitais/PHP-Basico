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

				$to      = 'habnercarlos@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: habnercarlos@gmail.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	var_dump(mail($to, $subject, $message, $headers));
	die;

	$a = "php é uma programação";
	// 0 != false || tipo_e != tipo_d
	// false != false || tipo_e != tipo_d
	if ($posicao = strripos($a, "PHP") !== false) {
		echo "posição no texto " . $posicao;
	} else {
		echo "falso";
	}

	<textarea name=""></textarea>

	die;

	$a = "meu texto existe";
	echo strpos($a, "texto");




	die;

	//tamanho de uma string
	echo strlen("php e mysql");