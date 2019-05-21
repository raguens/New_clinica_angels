<?php
$servidor = "senacinfo-db";
$banco = "m171_03_T2E";
$usuario = "inf_m171";
$senha = "senacrs";

// Criando conexão

$conn = mysqli_connect($servidor, $usuario, $senha, $banco);

// Checando status da conexão

/* if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "Conexão bem sucedida"; */
//mysqli_close($conn);

?>
