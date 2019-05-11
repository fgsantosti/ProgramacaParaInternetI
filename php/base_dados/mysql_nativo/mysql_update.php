<?php
	//Alteração via formulário
	//$id = $_POST["id"];
	//$nome = $_POST["nome"];
	//$codigo = $_POST["codigo"];
  	
  	//forma direta
  	$id = 4; 
  	$nome = 'Steve Jobs'; 
  	$codigo = 4;

	include_once 'conexao.php';    
	  
	$query = "UPDATE famosos SET codigo = '{$codigo}',
								 nome = '{$nome}'
								 WHERE idFamosos = '{$id}'";
  	
  	$result = mysqli_query($conn,$query);

	if($result){
		echo "Atualizado com sucesso!";
	}else{
		echo "Erro ao atualizar!";
	}
	mysqli_close($conn); 