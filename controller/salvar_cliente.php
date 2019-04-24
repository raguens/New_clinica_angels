<?php
    session_start();
    include_once '../conexao.php';

    $nome = $_POST['txtNome'];
    $nascimento = $_POST['txtNascimento'];
    $email = $_POST['txtEmail'];
    $cpf = $_POST['txtCpf'];
    $telefone = $_POST['txtTelefone'];
    $sexo = $_POST['rbSexo'];
    $senha = $_POST['txtSenha'];

    $sql = mysql_query("INSERT INTO clientes(nome, nascimento, email, cpf,
       telefone, sexo, senha) VALUES('$nome', '$nascimento', '$email', '$cpf',
       '$telefone', '$sexo', '$senha')")

    /*
    $result_usuario = "insert into usuarios (nome, telefone, nascimento, email, cpf, sexo, senha, admin)";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    */

?>
