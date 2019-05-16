<?php  
session_start();
	if (isset($_SESSION['usuario'])) {
		
	}else{
		header("Location:form_login.php?erro=Usuário não logado.");
	}

?>