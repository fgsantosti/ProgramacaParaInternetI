<?php
//incluindo as funcionalidaes do arquivo mysql_conexao_pdo.php
include_once 'mysql_conexao_pdo.php';

try {
	//instancia objeto PDO, conectando no MySQL
	//$conn = new PDO("mysql:host=$servername;dbname=livro", $username, $password);

	//executa uma instrução SQL de consulta
	$result = $conn -> query("SELECT idFamosos, codigo, nome FROM famosos");

	if ($result) {
		//percorre os resultados via iteração
		while($row = $result->fetch(PDO::FETCH_OBJ)){
			//exibe os resultados, acessando o objeto retornado
			echo 	$row -> idFamosos .'-'. 
					$row -> codigo .' - '. 
					$row -> nome .'|
					<a href="form_update_famosos.php?id='.
					$row -> idFamosos.'">Alterar</a>'.'|
					<a href="mysql_delete_pdo.php?id='.
					$row -> idFamosos.'">Deletar</a><br>';
		}
	}
	$conn = null;
} catch (PDOException $e) {
	print "Erro!: ". $e -> getMessage(). "<br>";
}
