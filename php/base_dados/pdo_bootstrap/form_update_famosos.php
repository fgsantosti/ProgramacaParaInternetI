<?php
	include_once 'mysql_conexao_pdo.php';

	$id = $_GET["id"];
	//$row2 = new stdClass;

	//executa uma instrução SQL de seleção
	$result = $conn -> query("SELECT * FROM famosos WHERE idFamosos = '{$id}'");

	$result2 = $conn -> query("SELECT * FROM famosos WHERE idFamosos = '{$id}'");

	if ($result){
		$row = $result->fetch();

		$row2 = $result2->fetch(PDO::FETCH_OBJ);
		$id = $row["idFamosos"];
		$nome = $row["nome"];
		$codigo = $row["codigo"];
	}

	echo $row2 -> nome; 

	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Fomulário Famosos</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form method="POST" action="mysql_update_pdo.php">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<label>Código do Livro</label><br>
			<input type="text" name="codigo" 
			value="<?php echo $codigo; ?>"><br>
			<label>Nome do Famoso</label><br>
			<input type="text" name="nome" value="<?php echo $row2->nome ?>"><br>
			<input type="submit" name="Enviar">
		</form>
	</body>
</html>