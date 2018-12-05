<form action="processa.php" method="post"
	  enctype="multipart/form-data">
	Nome: <input type="text" name="nome">
	<br>
	Foto: <input type="file" name="foto">
	<input type="submit" value="Cadastrar">
</form>
<?php

// scanear o diretório corrente
foreach (scandir("./") as $pasta) {
	if (is_dir($pasta) && $pasta != "." && $pasta != "..") {
		echo $pasta."<br>";	

		//pesquisa tipos de arquivo
		//foreach (glob("$pasta/*.{jpg,png}", GLOB_BRACE ) as $a) {
		foreach (glob("$pasta/*.jpg") as $a) {
			echo "<img src='$a' width='100px'><br>";
		}
	}
}

?>