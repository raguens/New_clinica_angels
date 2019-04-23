<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Clinica Angels</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>

  <body>

      <?php
      require_once 'menu.php';
       ?>

       <div id="sessao_login">
           <fieldset id="fd_sessao_login">
               <legend>Iniciar Sessão</legend>
                   <form action="" method="post"/>

                   <label class="lb_login">Usuário: <label> <br>
                       <input class="input_login" type="text" name="txtLogin" placeholder="Digite seu nome de usário" required/>

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

  </body>
</html>
