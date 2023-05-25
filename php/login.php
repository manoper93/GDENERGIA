<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$host = 'localhost';
$db = 'watt';
$usuario = 'root';
$senha = '';

$conn = new mysqli($host, $usuario, $senha, $db);

if ($conn->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
}

$numero = $_POST['numero'];
$password = $_POST['password'];

$sql = "SELECT * FROM utilizador WHERE numeroc = '$numero' AND passwordc = '$password'";
$result = $conn->query($sql);


if ($result->num_rows === 1) {

  header("Location: x.html"); // Redireciona para x.html
  exit();

} else {
  echo "Login inválido";
}


$conn->close();
}
?>