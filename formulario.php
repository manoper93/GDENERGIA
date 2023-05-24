<?php
$host = 'localhost';
$db = 'watt';
$usuario = 'root';
$senha = '';

$conn = new mysqli($host, $usuario, $senha, $db);

if ($conn->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$sql = "INSERT INTO formulario (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

if ($conn->query($sql) === TRUE) {
    echo 'Dados salvos com sucesso na base de dados.';
} else {
    echo 'Erro ao salvar os dados: ' . $conn->error;
}

$conn->close();
?>
