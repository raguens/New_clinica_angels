<link rel="stylesheet" type="text/css" href="estilo.css">

<?php
require_once 'background.php';
require_once 'menu.php';

 ?>

<div id="tabela_consultas">
<?php

echo "<table border=1>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nome</th>";
echo "<th>Email</th>";
echo "<th>Horario</th>";
echo "<th>Pagamento</th>";
echo "<th>Mensagem</th>";
echo "</tr>";

$conexao = mysqli_connect("m171_03_T2E", "inf_m171", "senacrs", "senacinfo-db") or die("Erro ao conectar!");
$sql = "SELECT * FROM consultas";
$resultado = mysqli_query($conexao, $sql) or die("Erro ao registrar!");

while($registro = mysqli_fetch_array($resultado)){
  $id = $registro['id'];
  $nome = $registro['nome'];
  $email = $registro['email'];
  $horario = $registro['horario'];
  $pagamento = $registro['pagamento'];
  $mensagem = $registro['mensagem'];
  echo "<tr>";
  echo "<td>".$id."</td>";
  echo "<td>".$nome."</td>";
  echo "<td>".$email."</td>";
  echo "<td>".$horario."</td>";
  echo "<td>".$pagamento."</td>";
  echo "<td>".$mensagem."</td>";
  echo "</tr>";
}
mysqli_close($conexao);
echo "</table>";
 ?>
</div>
