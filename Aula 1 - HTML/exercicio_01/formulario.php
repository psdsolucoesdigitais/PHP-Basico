<form action="processa.php" method="post">
	Nome: <input type="text" name="nome">
	<br>
	Sexo: 	<input type="radio" name="sexo" value="M">Masculino
			<input type="radio" name="sexo" value="F">Feminino
	<br>
	Lí e aceito o contrato:
		<input type="checkbox" name="aceito" value="S">
	<br>
	Estado Civil:
	<select name="estado_civil">
		<option value="">Selecione</option>
		<option value="casado">Casado</option>
		<option value="solteiro">Solteiro</option>
		<option value="separado">Separado</option>
	</select>
	<br>
	<input type="submit" value="Enviar">
</form>