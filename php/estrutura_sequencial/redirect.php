<?php  
$adm_nome = 'admin';
$adm_senha = 1234;

$usuario = $_GET['nome'];
$senha = $_GET['senha'];

$usuarios = array( 'Toyota', 
				'Chevrolet ', 
				'Ford ', 
				'Ford ');

$senhas = array( 'Toyota', 
				'Chevrolet ', 
				'Ford ', 
				'Ford ');

foreach ($usuarios as $key => $value) {
	if ($usuario == $value) {
		if ($senha == $senhas[$key]){
			header("Location:login_sucesso.html");
		}
		# code...
	}
}
if ($adm_nome == $usuario) {
	header("Location:login_sucesso.html");
}else {
	header("Location:login_erro.html");
}	

?>