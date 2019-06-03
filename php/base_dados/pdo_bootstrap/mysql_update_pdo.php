<?php
	//Alteração via formulário

	$famosos = array(); 
	
	$famosos['codigo'] = $_POST['codigo'];
	$famosos['nome'] = $_POST['nome'];
	$famosos['id'] = $_POST['id'];

	//echo $famosos['id'].'-'.$famosos['codigo'].'-'.$famosos['nome'];
  	//Alteração direta
  	//$id = 4; 
  	//$nome = 'Felipe Jobs'; 
  	//$codigo = 4;

	//incluindo as funcionalidaes do arquivo mysql_conexao_pdo.php
	include_once 'mysql_conexao_pdo.php';

	//executa uma instrução SQL de update
	$result = $conn -> query("UPDATE famosos SET 
								codigo = '{$famosos['codigo']}',
								nome = '{$famosos['nome']}'
								WHERE idFamosos = '{$famosos['id']}'");
	if ($result) {
		$msg = "Atualizado com sucesso!";
		header("Location:mysql_lista_pdo_obj.php?msg=$msg");
	}else{
		echo "Erro ao atualizar!";
	}	
	$conn = null;
