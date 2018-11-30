<form action="processamento.php" method="post">
	<?php for ($x=1	; $x<=10; $x++) { ?>	
	Chave <?php echo $x ?>:
	<input type="text" name="chave[]">
	Nome <?php echo $x ?>:
	<input type="text" name="valor[]">
	<Br>
	<?php } ?>
	Qual o tipo de ordenação?
	<select name="tipo_ordenacao">
		<?php
			$tipo = array("sort", "asort");
			$tipo[] = "ksort";
			$tipo[] = "ksort";
			$tipo[] = "asort";
			$tipo[] = "arsort";

			foreach ($tipo as $r) {
		?>
			<option value="<?php echo $r ?>">
				<?php echo ucfirst($r) ?>
			</option>
		<?php 
			} ?>
	</select>
	<input  type="hidden" name="quantidade" 
			value="<?php echo $x ?>">
	<input type="submit" value="Enviar >>>>>">
</form>