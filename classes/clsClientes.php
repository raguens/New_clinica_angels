<?php

class Clientes
{
  private $pdo;
  public $msgErro = ""; //tudo ok

  public function conectar($banco, $servidor, $usuario, $senha ){
      global $pdo;
      try {

      } catch (PDOException $e) {
        $msgErro = $e->getMessage();
      }

      $pdo = new PDO("mysql:dbname=".$banco."servidor=".$servidor,
      $usuario, $senha);
  }

  public function cadastrar($nome, $nascimento, $email, $cpf, $telefone,
  $sexo, $senha){
      global $pdo;

      //verificar se o email já é cadastrado
      $sql = $pdo->prepare("SELECT id FROM clientes WHERE email = :e");

      $sql->bindValue(":e", $email);
      $sql->execute();
      if($sql->rowCount() > 0){
        return false; //já cadastrado
      }else{
        //caso não, cadastrar
        $sql = $pdo->prepare("INSERT INTO clientes (nome, nascimento, email,
        cpf, telefone, sexo, senha) VALUES(:a, :b, :c, :d, :e, :f, :g)");

        $sql->bindValue(":a", $nome);
        $sql->bindValue(":b", $nascimento);
        $sql->bindValue(":c", $email);
        $sql->bindValue(":d", $cpf);
        $sql->bindValue(":e", $telefone);
        $sql->bindValue(":f", $sexo);
        $sql->bindValue(":g", $senha);
        $sql->execute();
        return true;
      }

      //caso não, cadastrar
  }

  public function logar($email, $senha){
      global $pdo;
      //verificar  se email e senha estao cadastrados
      $sql = $pdo->prepare("SELECT id FROM clientes WHERE email = :c AND
      senha = :g");

      $sql->bindValue(":c", $email);
      $sql->bindValue(":g", $senha);
      $sql->execute();
      if($sql->rowCount() > 0){
        //entrar no sistema
        $dado = $sql->fetch();
        session_start();
        $_SESSION['id'] = $dado['id'];
        return true; //logado com sucesso
      }else{
          return false; //não foi possível logar
      }


  }

}
