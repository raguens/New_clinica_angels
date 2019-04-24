<?php
$servidor = "localhost";
$banco = "clinica_angels";
$usuario = "root";
$senha = "";

// Criando conexão

$conn = mysqli_connect($servidor, $usuario, $senha, $banco);

// Checando status da conexão

/* if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "Conexão bem sucedida"; */
//mysqli_close($conn);

?>
