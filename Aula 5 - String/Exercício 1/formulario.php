<form action="processa.php" method="post">
	Digite um texto:
	<textarea name="texto" rows="4" cols="5"></textarea>
	<br><br>
	digite uma palavra que queira saber se existe no texto
	<input type="text" name="existe">
	<br><br>
	procurar por <input type="text" name="procura">
	e trocar por <input type="text" name="troca">
	<br><br>
	quantas vezes a palavra <input type="text" name="quantas_vezes"> 
	aparece no texto
	<br><br>
	<input type="submit" value="Pesquisar">
</form>