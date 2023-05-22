<?php
// Dados de conexão com o banco de dados
$host = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'watt'; // Replace with the name of your database

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if (!$conn) {
    echo "Erro de conecção!!";
}
?>