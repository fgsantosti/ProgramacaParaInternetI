<?php  
//chamando a conexão
require_once 'conn.php';

$usuario = array();

//recebe o array do formulário form_login
$usuario['usuario'] = $_POST['usuario'];
$usuario['senha'] = $_POST['senha'];

//verificando se a infor esta chegando do form_login
echo $usuario['usuario'] .'<br>';
echo $usuario['senha'] .'<br>';


//query faz a seleção do usuário caso exista
$result = $conn -> query(" SELECT * FROM usuario 
							WHERE 
							usuario = '{$usuario['usuario']}' 
							AND 
							senha = '{$usuario['senha']}' ");


if ($result){
	$row = $result->fetch(); //é inserido a tupla selecionada na variável $row
	session_start(); //start e acessar a sessão
	$_SESSION['usuario'] = $row['usuario']; // armazeno o usuário na sessão
	$_SESSION['nome'] = $row['nome']; // armazeno o nome do usuário na sessão
	$_SESSION['email'] = $row['email'];
	
	header("Location:perfil_usuario.php"); // redireciono o usuário para seu perfil
}else{
	echo "Não foi possível realizar o login.";
}
