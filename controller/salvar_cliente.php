<?php
    include_once '../conexao.php';
    include_once '../cadastrar_cliente.php';


    $nome = $_POST['txtNome'];
    $nascimento = $_POST['txtNascimento'];
    $email = $_POST['txtEmail'];
    $cpf = $_POST['txtCpf'];
    $telefone = $_POST['txtTelefone'];
    $sexo = $_POST['rbSexo'];
    $senha = $_POST['txtSenha'];

    mysqli_query($conn, "INSERT INTO clientes(nome, nascimento, email, cpf,
       telefone, sexo, senha) VALUES('$nome', '$nascimento', '$email', '$cpf',
       '$telefone', '$sexo', '$senha')");


?>
