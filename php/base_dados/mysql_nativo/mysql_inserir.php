<?php

//abre conexão com o MySQL
//$conn = mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");$
$conn = mysqli_connect("127.0.0.1", "root", "", "livro");

//inserir vários registros
//mysqli_query(connection,query,resultmode);
mysqli_query($conn, "INSERT INTO famosos(codigo, nome) VALUES (1, 'Jonh Lennon')");
mysqli_query($conn, "INSERT INTO famosos(codigo, nome) VALUES (2, 'Mahatma Gandhi')");
mysqli_query($conn, "INSERT INTO famosos(codigo, nome) VALUES (3, 'Ayrton Senna')");
mysqli_query($conn, "INSERT INTO famosos(codigo, nome) VALUES (4, 'Charlie Chaplin')");
mysqli_query($conn, "INSERT INTO famosos(codigo, nome) VALUES (5, 'Abraham Silberschatz')");
mysqli_query($conn, "INSERT INTO famosos(codigo, nome) VALUES (6, 'Andrew Tanenbaum')");

//fecha a conexão
mysqli_close($conn);