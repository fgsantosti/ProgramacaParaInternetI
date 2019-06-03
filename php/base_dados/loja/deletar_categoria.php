<?php

// pegando o id da categoria
$id = $_GET['id'];

require_once 'mysql_conexao_pdo.php';
require_once 'CategoriaDAO.php';

$cd = new CategoriaDAO();

$cd -> deletar_categoria($conn, $id);
