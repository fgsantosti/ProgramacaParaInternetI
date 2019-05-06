<?php
	//Alteração via formulário
	//$nome = $_POST["nome"];
	//$codigo = $_POST["codigo"];
  	
  	//Alteração direta
  	$id = 4; 
  	$nome = 'Felipe Jobs'; 
  	$codigo = 4;

	//incluindo as funcionalidaes do arquivo mysql_conexao_pdo.php
	include_once 'mysql_conexao_pdo.php';

	try {
		//executa uma instrução SQL de update
		$result = $conn -> query("UPDATE famosos SET codigo = '{$codigo}',
								 nome = '{$nome}'
								 WHERE idFamosos = '{$id}'");
		if ($result) {
			echo "Atualizado com sucesso!";
		}else{
			echo "Erro ao atualizar!";
		}	
		$conn = null;
	} catch (PDOException $e) {
		print "Erro!: ". $e -> getMessage(). "<br>";
	}