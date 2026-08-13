<?php

$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "padaria";

$conexao = new mysqli($hostname, $username, $password, $database);
 
if ($conexao->connect_error){
    die ("Falha na conexão: " . $conexao->connect_error);
}

echo "Conectado com sucesso ao banco de dados";
?>

