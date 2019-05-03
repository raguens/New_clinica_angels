<?php
    require_once 'classes/clsConsultas.php';
    $consultas = new Consultas;
    session_start();
    if(!isset($_SESSION['id'])){
      header("location: index.php");
      exit;
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Teste Formulário</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>


  <body>
    <?php
      include_once 'background.php';
     ?>

    <?php
        require_once 'menu.php';
     ?>


      <section id="section_cadastrar_consultas">
          <form method="post" action="">
              <fieldset id="fd_cadastrar_consultas">
                  <legend>Marcação de Consulta</legend>

                  <label for="nome_cadastrar_consulta">Nome: </label>
                  <input class="campos" type="text" id="nome_cadastrar_consulta" name="txtNome" maxlength="100" required autofocus>

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
                      <textarea name="txtMsg" maxlength="200" id="msg"></textarea>

                      <br><br>

                  <input class="btn_3d" type="submit" value="Marcar Consulta">
                  <input class="btn_3d" type="reset" value="Limpar informações">
              </fieldset>
          </form>
      </section>
<?php
//verificar se clicou no botão cadastrar
if(isset($_POST['txtNome'])){

  $nome = ($_POST['txtNome']);
  $email = ($_POST['txtEmail']);
  $horario = ($_POST['txtHorario']);
  $pagamento = ($_POST['txtPagamento']);
  $mensagem = ($_POST['txtMsg']);

  //verificar se está preenchido
  if(!empty($nome) && !empty($email) && !empty($horario) && !empty($pagamento)
  && !empty($mensagem)){

$consultas->conectar("clinica_angels", "localhost", "root", "");
if($consultas->msgErro == "") //esta tudo ok
{
    if($consultas->cadastrar($nome, $email, $horario, $pagamento, $mensagem)){
      ?>
      <div id="msg_sucesso2">
      Consulta agendada com sucesso!
      </div>
      <?php
    }else{
      ?>
      <div class="msg_erro2">
      Este horário já está ocupado, por favor selecione outro.
      </div>
      <?php
    }
  }else{
    ?>
    <div class="msg_erro2">
  <?php echo "Erro: ".$consultas->msgErro; ?>
    </div>
  <?php
}
}else{
  ?>
  <div class="msg_erro2">
  Preencha todos os campos!
  </div>
  <?php
}
}


 ?>

  </body>
</html>
