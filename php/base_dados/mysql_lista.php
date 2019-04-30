<?php 

include_once 'conexao.php';
//abre conexão com o MySQL
//$conn = mysqli_connect("127.0.0.1", "root", "", "livro");
//define a consulta que será realizada
$query = 'SELECT codigo, nome FROM famosos';

//envia a consulta ao banco de dados
$result = mysqli_query($conn, $query);
if ($result) {
	//percorre resultados da pesquisa
	while ($row = mysqli_fetch_assoc($result)) {
		echo $row['codigo'] . ' - '. $row['nome'] ."<br>";
	}
}

mysqli_close($conn);