<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$db = 'wattt';

$conn = new mysqli($host, $usuario, $senha, $db);

if ($conn->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM utilizador WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
// login bem sucedido
$row = $result -> fetch_assoc();
  header("Location: index.html"); // Redireciona para x.html
  exit();

} else {
  header("Location: abc.html");
}


$conn->close();
}
?>