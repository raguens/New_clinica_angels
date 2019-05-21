<?php
//  include_once 'conexao.php';
  require_once 'classes/clsClientes.php';
  $cliente = new Clientes;
  session_start();

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>cd</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>

  <body>
    <?php
      include_once 'background.php';
     ?>

    <?php
        require_once 'menu.php';
     ?>

      <section id="section_cadastrar_cliente">
          <form method="POST">
              <fieldset id="fd_cadastrar_cliente">
                  <legend>Cadastrar Cliente</legend>

                      <label>Nome: </label>
                      <input class="campos" type="text" name="txtNome" maxlength="100" required autofocus>

                      <label>Nascimento: </label>
                      <input class="campos" type="date" name="txtNascimento" maxlength="50" required>

                      <br><br>

                      <label>Email: </label>
                      <input class="campos" type="email" name="txtEmail" maxlength="100" required>

                      <label>CPF: </label>
                      <input class="campos" type="text" name="txtCpf" maxlength="50" required>

                      <br><br>

                      <label>Telefone: </label>
                      <input class="campos" type="text" name="txtTelefone" maxlength="50" required>

                      <label>Sexo: </label>
                      <input type="radio" name="rbSexo" maxlength="50" required/> Masculino
                      <input type="radio" name="rbSexo"/> Feminino

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
      <?php
      //verificar se clicou no botão
      if(isset($_POST['txtNome'])){
        $nome = ($_POST['txtNome']);
        $nascimento = ($_POST['txtNascimento']);
        $email = ($_POST['txtEmail']);
        $cpf = ($_POST['txtCpf']);
        $telefone = ($_POST['txtTelefone']);
        $sexo = ($_POST['rbSexo']);
        $senha = ($_POST['txtSenha']);
        $confirmarSenha = ($_POST['txtConfirmarSenha']);
        //verificar se está preenchido
        if(!empty($nome) && !empty($nascimento) && !empty($email) && !empty($cpf)
        && !empty($telefone) && !empty($sexo) && !empty($senha)
        && !empty($confirmarSenha)){

          $cliente->conectar("clinica_angels", "localhost", "root", "");
          if($cliente->msgErro == "")//tudo ok
          {
            if($senha == $confirmarSenha){
              if($cliente->cadastrar($nome, $nascimento, $email, $cpf, $telefone, $sexo,
              $senha)){
                ?>
                <div id="msg_sucesso">
                Cadastrado com sucesso!
                </div>
                <?php
              }else{
                ?>
                <div class="msg_erro">
                Email já cadastrado!
                </div>
                <?php
              }
            }else{
              ?>
              <div class="msg_erro">
              Senha e confirmar senha não correspondem
              </div>
              <?php
            }

          }else{
            ?>
            <div class="msg_erro">
            <?php echo "Erro: ".$cliente->msgErro;?>
            </div>
            <?php
          }
      }else{
        ?>
        <div class="msg_erro">
        echo "Preencha todos os campos!";
        </div>
        <?php
      }
}
      ?>
  </body>
</html>
