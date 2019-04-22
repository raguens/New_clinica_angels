<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>cd</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>

  <body id="body_frmconsultas">

      <section>
          <form method="post" action="">
              <fieldset id="fd_cadastrar">
                  <legend>Cadastrar cliente</legend>

                  <label for="Nome">Nome: </label>
                  <input class="campos" type="text"  name="txtNome" maxlength="100" required autofocus>

                  <br><br>

                  <label for="Data de Aniversario">Data de Aniversario: </label>
                  <input class="campos" type="date"  name="txtDate" maxlength="100" required>


                      <br><br>

                      <label for="Email">Email: </label>
                      <input class="campos" type="email"  name="txtEmail" maxlength="100" required>

                      <br><br>

                      <label for="Sexo">Sexo: </label>
                      <input class="campos" type="sex"  name="txtsex" maxlength="100" required>

                          <br><br>
                          <label for="phone">Telefone: </label>
                          <input class="campos" type="text"  name="txtsex" maxlength="100" required>

                          <br><br>

                          <label for="senha">senha: </label>
                          <input class="campos" type="password"  name="txtsex" maxlength="100" required>


                  <input type="submit" value="cadastrar">
                  <input type="reset" value="Limpar informações">
              </fieldset>
          </form>
      </section>
  </body>
</html>
