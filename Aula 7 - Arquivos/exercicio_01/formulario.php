<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	$( document ).ready(function() {
	    $("#mensagem").fadeOut(3000);
	});

</script>
<form action="processa2.php" method="post">
	Nome: <input type="text" name="nome">
	<br>
	Fone:
	<input type="text" name="fone">
	<input type="submit" value="Cadastrar">
</form>
<h4 id="mensagem"><?php
	echo isset($_GET["msg"]) ? $_GET["msg"] : null;
?></h4>
<br>
<br><br><br>
Agenda telefônica<br><br>
<?php
//echo nl2br(file_get_contents("banco.txt"));
foreach(file("banco.txt") as $linha) {
		echo $linha ."<br>";
?>

<?php } ?>