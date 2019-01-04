<form method="post" action="processa.php" enctype="multipart/form-data">
	Nome: <input type="text" name="nome"><br>
	Foto: <input type="file" name="imagem"><br><br>
	<input type="submit" value="Clique para enviar sua foto">
</form>

<?php
	foreach (file("meu_banco_de_dados.txt") as $registro) {
		// jose;38epl.jpg
		$dados = explode(";", $registro);// de 2 posições: 0 vai ter nome e posição 1 vai ter foto.
?>
	<img src="./fotos/<?php echo $dados[1] ?>" width="100px"><?php echo $dados[0] ?><br>
<?php } ?>