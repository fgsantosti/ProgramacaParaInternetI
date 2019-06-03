<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" >

</head>
<body>
<div class="container">

<?php

		//incluindo as funcionalidaes do arquivo mysql_conexao_pdo.php
		include_once 'mysql_conexao_pdo.php';

		if (isset($_GET['msg'])) {
			$msg = $_GET['msg'];
			echo "<div class='alert alert-success' role='alert'>
			  $msg
			</div>";
		}

		//executa uma instrução SQL de consulta
		$result = $conn -> query("SELECT idFamosos, codigo, nome FROM famosos");

			echo '
			<table class="table table">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Código</th>
					<th scope="col">Nome</th>
					<th scope="col">Alterar</th>
					<th scope="col">Deletar</th>
				</tr>';

			if ($result) {

				//percorre os resultados via iteração
				while($row = $result->fetch(PDO::FETCH_OBJ)){
					//exibe os resultados, acessando o objeto retornado
					echo '<tr>';
					echo 	'<td>'.$row -> idFamosos .'</td>'. 
							'<td>'. $row -> codigo .' </td> '. 
							'<td>'. $row -> nome .'</td>
							<td> <a href="form_update_famosos.php?id='.
							 $row -> idFamosos.'">Alterar</a>'.'</td>
							<td><a href="mysql_delete_pdo.php?id='.
							 $row -> idFamosos.'">Deletar</a></td>';
				echo '</tr>';
				}
			}
			$conn = null;
			echo "</table>";
?>


</div>
</body>
</html>
