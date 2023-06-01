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

$tipocliente = 0;
$email = $_POST['logemail'];
$password = $_POST['logpass'];

$sql = "INSERT INTO utilizador (logemail, logpass) VALUES ('$email', '$password')";
$result = $conn->query($sql);


if ($conn->query($sql) === TRUE) {
  echo "Registo sucesso!";
} else {
  echo "Registo inválido";
}


$conn->close();
}
?>