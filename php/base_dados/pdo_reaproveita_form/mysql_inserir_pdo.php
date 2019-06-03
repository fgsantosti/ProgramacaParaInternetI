<?php
include_once 'mysql_conexao_pdo.php';

$famosos = array(); 

$famosos['codigo'] = $_POST['codigo'];
$famosos['nome'] = $_POST['nome'];

//try {
    //exeuta uma série de instruções SQL
$result = $conn->exec("INSERT INTO famosos(codigo, nome) VALUES ('{$famosos['codigo']}','{$famosos['nome']}')");

if ($result) {
	echo "Famoso cadastrado com sucesso!";
}
    //$conn->exec("INSERT INTO famosos(codigo, nome) VALUES (2, 'Chorão')");
    /*$conn->exec("INSERT INTO famosos(codigo, nome) VALUES (3, 'Mano Brown')");
    $conn->exec("INSERT INTO famosos(codigo, nome) VALUES (4, 'Edi Rock')");
    $conn->exec("INSERT INTO famosos(codigo, nome) VALUES (5, 'Ice Blue')");
    $conn->exec("INSERT INTO famosos(codigo, nome) VALUES (6, 'DJ KL')");
}catch(PDOException $e){
    echo "Conexao falhou: " . $e->getMessage();
}
*/