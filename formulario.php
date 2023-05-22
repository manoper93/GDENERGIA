<?php

if (isset($_POST['nome'])) {
    include 'conectar_db.php';
    echo "Enviado!";
} else {
    echo "ERRO!"; 
}
?>
