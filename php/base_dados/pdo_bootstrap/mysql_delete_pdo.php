<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" >

</head>
<body>
<div class="container">

<?php
	//Delete via lista
	$id = $_GET["id"];
  	
  	//Alteração direta
  	//$id = 8; 

	//incluindo as funcionalidaes do arquivo mysql_conexao_pdo.php
	include_once 'mysql_conexao_pdo.php';

	//executa uma instrução SQL de update
	$result = $conn -> query("DELETE FROM famosos WHERE idFamosos = '{$id}'");

	if ($result) {
		$msg = "Deletado com sucesso!";
		header("Location:mysql_lista_pdo_obj.php?msg=$msg");
	}else{
		echo "Erro ao deletar!";
	}	
	$conn = null;
?>

</div>
</body>
</html>
