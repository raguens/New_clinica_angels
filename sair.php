<?php
session_start();
if( isset($_SESSION['logado']) )
    unset ($_SESSION['logado']);

if( isset($_SESSION['id']) )
    unset ($_SESSION['id']);

if( isset($_SESSION['txtNome']) )
    unset ($_SESSION['txtNome']);

if( isset($_SESSION['txtEmail']) )
    unset ($_SESSION['txtEmail']);


session_destroy();

header("Location: index.php");
