<form action="cadastro.php" method="post">

Nome: <input type="text" name="nome_completo" value=""><br>
País: 
	<input type="radio" name="pais" value="BRA">Brasil
	<input type="radio" name="pais" value="ARG">Argentina
	<input type="radio" name="pais" value="EUA">EUA
<br>
Sexo: 	<input type="radio" name="sexo" value="M">Masculino
		<input type="radio" name="sexo" value="F">Feminino
<br>
Receber newsletter: <input type="checkbox" name="receber" value="S">
<br>
Estado civil:
	<select name="estado_civil">
		<option value="C">Casado</option>
		<option value="S">Solteiro</option>
	</select>
<input type="submit" value="Enviar dados">

</form>