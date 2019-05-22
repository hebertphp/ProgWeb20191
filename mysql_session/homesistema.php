<?php
session_start();
include "init.php";
print_r($_SESSION);
verifica_login();
$_SESSION["msg_sistema"]="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="homesistema.php"><span class="glyphicon glyphicon-education"></span> Prof. Hebert</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="homesistema.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="cadastrarusuario.php"><span class="glyphicon glyphicon-user"></span> Cadastrar Usuário</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Relatório</a></li>
     <!-- <li><a href="#">Page 3</a></li> -->
    </ul>
     <a href="sair.php" class="btn btn-default  navbar-btn navbar-right"><span class="glyphicon glyphicon-log-out"></span> Sair</a>  
  </div>
</nav>
    <div class="container">
     <div class="container">
        <div class="jumbotron">
            <h1>Sistema de Login e Senha com: Sessão, Mysql e <a href="https://www.w3schools.com/bootstrap/default.asp" target="_blank">Bootstrap</a></h1>
            <p>Área administrativa do sistema</p>
        </div>
       </div>
    </div>
</body>
</html>
