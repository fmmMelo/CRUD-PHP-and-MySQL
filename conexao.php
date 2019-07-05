<?php

//conexao de PhP com MySQLi

//conexao com banco de dados

$host = "localhost";
$user = "root";
$password = "";
$database = "CRUD";

//criando conexao

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn)
{
    die("Erro na conexão: " . mysqli_connect_error());
}
else
{
    //echo "Conexão feita com sucesso!";
}
?>