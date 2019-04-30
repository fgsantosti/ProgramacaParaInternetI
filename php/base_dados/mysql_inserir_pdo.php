<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
	//instancia objeto PDO, conectando no MySQL
    $conn = new PDO("mysql:host=$servername;dbname=livro", $username, $password);
    //exeuta uma série de instruções SQL
    $conn->exec("INSERT INTO famosos(codigo, nome) VALUES (1, 'Jonh Lennon')");
    $conn->exec("INSERT INTO famosos(codigo, nome) VALUES (2, 'Chorão')");
    $conn->exec("INSERT INTO famosos(codigo, nome) VALUES (3, 'Mano Brown')");
    $conn->exec("INSERT INTO famosos(codigo, nome) VALUES (4, 'Edi Rock')");
    $conn->exec("INSERT INTO famosos(codigo, nome) VALUES (5, 'Ice Blue')");
    $conn->exec("INSERT INTO famosos(codigo, nome) VALUES (6, 'DJ KL')");
}catch(PDOException $e){
    echo "Conexao falhou: " . $e->getMessage();
}
