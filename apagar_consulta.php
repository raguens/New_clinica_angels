<?php
session_start();
include_once("classes/clsConsultas.php");
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_consulta = "DELETE FROM consultas WHERE id='$id'";
$resultado_consulta = mysqli_query($conn, $result_consulta);

header("Location: visualizar_consultas.php");
