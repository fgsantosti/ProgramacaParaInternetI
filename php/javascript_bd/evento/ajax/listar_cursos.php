<!DOCTYPE html>
<html>
<head>
	<title>Lista de Cursos</title>
	<meta charset="utf-8">
</head>

<body>
<?php

require_once 'CursoDAO.php';
require_once 'conn.php';


//$lcurso = array();
$lcurso = new CursoDAO(); 

$result = $lcurso -> listar_cursos($conn);
//$lcurso = CursoDAO::all();

//$res = $lcurso -> test();
//echo $res;

		echo '
		<table class="table table">
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nome</th>
				<th scope="col">Descricao</th>

			</tr>';

		if ($result) {

			//percorre os resultados via iteração
			while($row = $result->fetch(PDO::FETCH_OBJ)){
				//exibe os resultados, acessando o objeto retornado
				echo '<tr>';
				echo 	'<td>'.$row -> idcurso .'</td>'. 
						'<td>'. $row -> nome .' </td> '. 
						'<td>'. $row -> descricao .'</td>';
				echo '</tr>';
			}
		}
		$conn = null;
		echo "</table>";

?>

</body>
</html>



