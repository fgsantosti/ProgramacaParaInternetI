<?php  
	$tipo_usuario = 1;
	switch ($tipo_usuario) {
		case 1:
			echo "usuário administrador";
			break;
		case 2:
			echo "usuário gerente";
			break;
		case 3:
			echo "usuário cliente";
			break;		
		default:
			echo "tipo não existente";
			break;
	}
?>

