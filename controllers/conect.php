<?php 
// Conexão com o banco de dados (substitua com suas credenciais)
$servername = "localhost";
$username = "root";  // Substitua com seu usuário
$password = ""; // Substitua com sua senha
$dbname = "jqm_cars";  // Substitua com o nome do banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
?>