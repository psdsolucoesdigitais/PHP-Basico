<form action="processa.php" method="post">
	Idade: <input type="number" name="idade">
	<br>
	Sexo: 	<input type="radio" name="sexo" value="M">Masculino
			<input type="radio" name="sexo" value="F">Feminino
	<br>
	Cor do olhos:
	<select name="cor_olhos">
		<option value="">Selecione</option>
		<option value="verdes">Verdes</option>
		<option value="azuis">Azuis</option>
		<option value="pretos">Pretos</option>
	</select>
	<br>
	<input type="submit" value="Enviar">
</form>