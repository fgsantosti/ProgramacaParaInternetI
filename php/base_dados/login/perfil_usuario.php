<?php 

	//require_once 'validar_login.php';
	session_start();
	
	if (isset($_SESSION['usuario'])) {
		echo "Seja bem vindo ". $_SESSION['nome'];
		echo '<a href="sair.php"> Sair </a>';
	}else{
		header("Location:form_login.php?erro=Usuário não logado.");
	}

?>
