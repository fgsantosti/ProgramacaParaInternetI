<?php 

	require_once 'validar_login.php';

	echo "Seja bem vindo ". $_SESSION['nome'];

	echo '<a href="sair.php"> Sair </a>';


?>
