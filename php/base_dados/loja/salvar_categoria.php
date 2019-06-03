<?php

//$categoria = array();
//$categoria['nome'] = $_POST['nome'];

$nome = $_POST['nome'];

require_once 'mysql_conexao_pdo.php';
require_once 'Categoria.php';
require_once 'CategoriaDAO.php';


$categoria = new Categoria();
$cs = new CategoriaDAO();

$categoria -> setNome($nome); 

$cs -> inserir_categoria($conn, $categoria->getNome());

?>