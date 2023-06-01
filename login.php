<?php
// Configurações do banco de dados
$servername = 'localhost';
$username = 'root'; // substitua pelo nome de usuário do banco de dados
$password = ''; // substitua pela senha do banco de dados
$dbname = 'watt'; // substitua pelo nome do banco de dados

// Verifica se os dados foram enviados corretamente
if (isset($_POST['email']) && isset($_POST['senha'])) {
  // Dados recebidos do JavaScript
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  // Cria a conexão com o banco de dados
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verifica se ocorreu algum erro na conexão
  if ($conn->connect_error) {
      die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
  }

  // Escapa os valores para prevenir injeção de SQL (IMPORTANTE!)
  $email = $conn->real_escape_string($email);
  $senha = $conn->real_escape_string($senha);

  // Executa a query para buscar os dados
  $sql = "SELECT * FROM utilizador WHERE logemail = '$email' AND logpass = '$senha'"; // substitua pela sua query
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      $data = array();
      while ($row = $result->fetch_assoc()) {
          $data[] = $row;
      }
      echo json_encode($data);
  } else {
      echo 'Nenhum dado encontrado.';
  }

  // Fecha a conexão com o banco de dados
  $conn->close();
} else {
  // Retorna um erro ou redireciona para index.html
  // Redirecionamento para index.html
  header("Location: index.html");
  exit();
}
?>