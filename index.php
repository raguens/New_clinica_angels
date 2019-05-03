<?php
    require_once 'classes/clsClientes.php';
    $cliente = new Clientes;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Clinica Angels</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>

  <body>

    <?php
      include_once 'background.php';
     ?>

      <?php
      require_once 'menu.php';
       ?>

       <?php
       require_once 'login.php';
       ?>

      <div id="sair">
      <a class="btn_3d" href="sair.php">Sair</a>
      </div>



      <?php

      if(isset($_POST['txtEmail'])){

        $email = ($_POST['txtEmail']);
        $senha = ($_POST['txtSenha']);

        if(!empty($email) && !empty($senha)){

          $cliente->conectar("clinica_angels", "localhost", "root", "");
          if($cliente->msgErro == ""){

          if($cliente->logar($email, $senha)){
            header("Location: index.php");
          }else{
            ?>
            <div class="msg_erro">
            echo "Email/senha incorretos!";
            </div>
            <?php
          }

        }else{
          ?>
            <div class="msg_erro">
              <?php echo "Erro: ".$cliente->msgErro; ?>
            </div>
          <?php
          }

        }else{
          ?>
          <div class="msg_erro">
          echo "Preencha os campos para iniciar a sessão!";
          </div>
          <?php
        }
  }


       ?>
    </body>
</html>
