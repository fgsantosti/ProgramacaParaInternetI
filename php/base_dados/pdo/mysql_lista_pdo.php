<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	//incluindo as funcionalidaes do arquivo mysql_conexao_pdo.php
	include_once 'mysql_conexao_pdo.php';

	try {
		//executa uma instrução SQL de consulta
		$result = $conn -> query("SELECT codigo, nome FROM famosos");

		if ($result) {
			//percorre os resultados via iteração
			foreach ($result as $key => $row) {
				//exibe os resultados
				echo $row['codigo'] . ' - '. $row['nome'] ."<br>";
			}
		}	
		$conn = null;
	} catch (PDOException $e) {
		print "Erro!: ". $e -> getMessage(). "<br>";
	}

