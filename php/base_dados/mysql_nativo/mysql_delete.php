<?php
	//Alteração via formulário
	//$id = $_GET["id"];
	
  	//Alteração direta
  	$id = 6; 

	include_once 'conexao.php';    
	  
	$query = "DELETE FROM famosos WHERE idFamosos = '{$id}'";
  	
  	$result = mysqli_query($conn,$query);

	if($result){
		echo "Deletado com sucesso!";
	}else{
		echo "Erro ao deletar!";
	}
	mysqli_close($conn); 