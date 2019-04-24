<?php
    $servidor = "senacinfo-db";
    $banco = "m171_03_T2E";
    $usuario = "inf_m171";
    $senha = "senacrs";

    $conn = mysql_connect($servidor, $usuario, $senha) or die(mysql_error());
    mysql_select_db($banco) or die(mysql_error());
 ?>
