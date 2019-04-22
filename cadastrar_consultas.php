<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Teste Formulário</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>
  <body id="body_frmconsultas">

      <?php
        require_once 'menu.php';
      ?>
      <section>
          <form method="post" action="">
              <fieldset id="fd_cadastrar_consultas">
                  <legend>Marcação de Consulta</legend>

                  <label for="nome">Nome: </label>
                  <input class="campos" type="text" id="nome" name="txtNome" maxlength="100" required autofocus>

                  <br><br>

                  <label for="email">Email: </label>
                  <input class="campos" type="email" id="email" name="txtEmail" maxlength="100" required>

                  <br><br>

                  <label>Selecione um horário disponível: </label>
                      <select name="txtHorario">
                          <option value="14:15">14:15</option>
                          <option value="14:50">14:50</option>
                          <option value="15:20">15:20</option>
                          <option value="15:50">15:50</option>
                      </select>

                      <br><br>

                      <label>Selecione um metodo de pagamento: </label>
                          <br><br>
                          <input type="radio" name="txtPagamento" required/> Dinheiro
                          <input type="radio" name="txtPagamento"/> Crédito
                          <input type="radio" name="txtPagamento"/> Débito
                          <input type="radio" name="txtPagamento"/> Cheque <br>

                      <br>

                      <label for="msg">Especifique algo, se necessário: </label>
                      <br><br>
                      <textarea id="msg"></textarea>

                      <br><br>

                  <input type="submit" value="Marcar Consulta">
                  <input type="reset" value="Limpar informações">
              </fieldset>
          </form>
      </section>
  </body>
</html>
