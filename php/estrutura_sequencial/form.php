<!DOCTYPE html>
<html>
	<head>
		<title>Formulário</title>
	</head>
	<body>
		<form method="GET" action="get_form.php">
			Numero 1:
			<input type="text" name="n1">
			Numero 2:
			<input type="text" name="n2">

			<input type="submit" value="Enviar">
		</form>
	</body>
</html>

<?php
		
	if(isset($_GET["resposta"])){
		$resposta=$_GET["resposta"];
		echo "$resposta";
	}
	
?>