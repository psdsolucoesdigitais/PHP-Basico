<form action="processa.php" method="post" enctype="multipart/form-data">
Nome: <input type="text" name="nome"><br>
Arquivo: <input type="file" name="documento"><br><br>
<input type="submit" value="Upload e cadastro">
</form>
<?php
foreach (file("teste.txt") as $conteudo) {
		$dados = explode(";", $conteudo);
		echo $dados[0];
		if (strpos($dados[1], ".jpg") !== false) {
			echo "<img src='foto/".$dados[1]."' width='50px'><br>";	
		} else {
			echo "<a href='foto/".$dados[1]."'>Download</a><br>";
		}
		
	}
?>