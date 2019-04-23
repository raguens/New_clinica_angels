<?php
    session_start();
    include_once '../conexao.php';

    $result_usuario = "insert into usuarios (nome, telefone, nascimento, email, cpf, sexo, senha, admin)";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if(mysqli_insert_id($conn)){
      header("Location: ../index.php");
    }else {
      header("Location: ../index.php");
    }
?>
