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

       <div id="sessao_login">
           <fieldset id="fd_sessao_login">
               <legend>Iniciar Sessão</legend>
                   <form action="" method="post"/>

                   <label class="lb_login">Email: <label> <br>
                       <input class="input_login" type="email" name="txtEmail" placeholder="Digite seu email" required/>

                       <br><br>

                   <label class="lb_login">Senha: </label> <br>
                       <input class="input_login" type="password" name="txtSenha" placeholder="Digite sua senha" required/>

                       <br><br>

                   <input class="btn_3d" type="submit" value="Entrar"/>
                   <input class="btn_3d" type="reset" value=" Limpar"/>

                   <h2> Não tem um registro conosco? </h2>
                     <a class="cadastrese" href="cadastrar_cliente.php"> Cadastre-se </a>
           </fieldset>
      </div>
      <?php

      if(isset($_POST['txtNome'])){

        $email = ($_POST['txtEmail']);
        $senha = ($_POST['txtSenha']);

        if(!empty($email) && !empty($senha)){

          $cliente->conectar("clinica_angels", "localhost", "root", "");
          if($cliente->msgErro == ""){

          if($cliente->logar($email, $senha)){
            header("index.php");
          }else{
            echo "Email/senha incorretos!";
          }

        }else{
            echo "Erro: ".$cliente->msgErro;
          }

        }else{
          echo "Preencha os campos para iniciar a sessão!";
        }
  }


       ?>
    </body>
</html>
