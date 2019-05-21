<?php

class Consultas
{
  private $pdo;
  public $msgErro = ""; //tudo ok

  public function conectar($banco, $servidor, $usuario, $senha ){
      global $pdo;
      try {

      } catch (PDOException $e) {
        $msgErro = $e->getMessage();
      }

      $pdo = new PDO("mysql:host=localhost;dbname=clinica_angels",  "root", "" );
  }

  public function cadastrar($nome, $email, $horario, $pagamento, $mensagem){
      global $pdo;

      //verificar se o horário já está ocupado
      $sql = $pdo->prepare("SELECT id FROM consultas WHERE horario = :c");

      $sql->bindValue(":c", $horario);
      $sql->execute();
      if($sql->rowCount() > 0){
        return false; // horário já marcado
      }else{

        //caso não, cadastrar
        $sql = $pdo->prepare("INSERT INTO consultas (nome, email, horario,
        pagamento, mensagem) VALUES(:a, :b, :c, :d, :e)");

        $sql->bindValue(":a", $nome);
        $sql->bindValue(":b", $email);
        $sql->bindValue(":c", $horario);
        $sql->bindValue(":d", $pagamento);
        $sql->bindValue(":e", $mensagem);
        $sql->execute();
        return true;
      }

  }
}
