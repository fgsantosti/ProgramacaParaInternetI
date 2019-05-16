<?php
	session_start();//start e acessar a sessão
	session_unset();//liberação de todas as variáveis da sessão
	session_destroy();//destroi a sessão existente no navegador
	header("Location:index.php");
?>