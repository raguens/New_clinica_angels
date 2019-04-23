<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>cd</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>

  <body id="body_frmconsultas">
    <?php
        require_once 'menu.php';
     ?>

      <section id="section_cadastrar_cliente">
          <form method="post" action="">
              <fieldset id="fd_cadastrar_cliente">
                  <legend>Cadastrar Cliente</legend>

                  <label>Nome: </label>
                  <input class="campos" type="text" name="txtNome" maxlength="100" required autofocus>

                  <label>Nascimento: </label>
                  <input class="campos" type="date" name="txtNascimento" required>

                      <br><br>

                      <label>Email: </label>
                      <input class="campos" type="email" name="txtEmail" maxlength="100" required>

                      <label>Sexo: </label>
                      <input type="radio" name="rbSexo" required/> Masculino
                      <input type="radio" name="rbSexo"/> Feminino

                      <br><br>

                      <label>Telefone: </label>
                      <input class="campos" type="text" name="txtTelefone" maxlength="20" required>

                      <br><br>

                      <label>senha: </label>
                      <input class="campos" type="password" name="txtSenha" maxlength="100" required>

                      <label>Confirmar senha: </label>
                      <input class="campos" type="password" name="txtConfirmarSenha" maxlength="100" required>

                      <br><br>

                  <input class="btn_3d" type="submit" value="Cadastrar">
                  <input class="btn_3d" type="reset" value="Limpar informações">

              </fieldset>
          </form>
      </section>
  </body>
</html>
