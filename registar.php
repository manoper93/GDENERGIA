
<?php
// Configurações do banco de dados
$servername = 'localhost';
$username = 'root'; // substitua pelo nome de usuário do banco de dados
$password = ''; // substitua pela senha do banco de dados
$dbname = 'watt'; // substitua pelo nome do banco de dados

// Dados recebidos do JavaScript
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se ocorreu algum erro na conexão
if ($conn->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
}

// Escapa os valores para prevenir injeção de SQL (IMPORTANTE!)
$nome = $conn->real_escape_string($nome);
$email = $conn->real_escape_string($email);
$senha = $conn->real_escape_string($senha);

    $sql = "INSERT INTO utilizador (nome, logemail, logpass) VALUES ('$nome', '$email', '$senha')"; // substitua pela sua tabela e nomes de colunas
    if ($conn->query($sql) === TRUE) {
      echo 'Dados inseridos com sucesso.';
  } else {
      echo 'Erro ao inserir dados: ' . $conn->error;
  }
  
  // Fecha a conexão com o banco de dados
  $conn->close();
  ?>