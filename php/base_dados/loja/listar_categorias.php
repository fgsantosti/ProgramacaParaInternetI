<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" >

</head>
<body>
<div class="container">

<?php
		if(isset($_GET['msg'])){
			$msg = $_GET['msg'];
			echo "
			<div class='alert alert-success' role='alert'>
				$msg
			</div> ";
		}

		if(isset($_GET['msg_erro'])){
			$msg = $_GET['msg_erro'];
			echo "
			<div class='alert alert-danger' role='alert'>
				$msg
			</div> ";
		}
		//incluindo as funcionalidaes do arquivo mysql_conexao_pdo.php
		include_once 'mysql_conexao_pdo.php';
		include_once 'CategoriaDAO.php';

		//instance of class CategoriaDAO
		$cl = new CategoriaDAO();

		$result = $cl -> listar_categorias($conn); 
		echo '
			<table class="table table">
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Nome</th>
					<th scope="col">Alterar</th>
					<th scope="col">Deletar</th>
				</tr>';

			if ($result) {

				//percorre os resultados via iteração
				while($row = $result->fetch(PDO::FETCH_OBJ)){
					//exibe os resultados, acessando o objeto retornado
					echo '<tr>';
					echo 	'<td>'.$row -> idcategoria .'</td>'. 
							'<td>'. $row -> nome .'</td>
							<td> <a href="#'.
							 $row -> idcategoria.'">Alterar</a>'.'</td>
							<td><a href="deletar_categoria.php?id='.
							 $row -> idcategoria.'">Deletar</a></td>';
				echo '</tr>';
				}
			}
			$conn = null;
			echo "</table>";
?>


</div>
</body>
</html>
