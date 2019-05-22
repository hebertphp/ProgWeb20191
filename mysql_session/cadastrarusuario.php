<?php
session_start();
include "init.php";
print_r($_SESSION);
verifica_login();
$err = filter_input(INPUT_GET, 'erro',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
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
      <li><a href="homesistema.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> Cadastrar Usuário</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Relatório</a></li>
     <!-- <li><a href="#">Page 3</a></li> -->
    </ul>
     <a href="sair.php" class="btn btn-default  navbar-btn navbar-right"><span class="glyphicon glyphicon-log-out"></span> Sair</a>
  </div>
</nav>
<div class="container">
	<?php
	if($err=="user"){
	?>
    <div class="alert alert-danger">
    <strong>Atenção!</strong> Usuário ou senha não existem! Digite novamente.
    </div>
	<?php
	}
	?>
	<form method="post" action="recebecadastrousuario.php">

			<h2>Cadastrar Usuário</h2>

      <?php 
       if($_SESSION["msg_sistema"]=="caduserok"){
           
            echo '<div class="alert alert-success"> Dados Cadastrados com sucesso!';   
       } 
        elseif($_SESSION["msg_sistema"] == "E-mail já cadastrado!"){
            
            echo '<div class="alert alert-danger"> E-mail já cadastrado!';    
            
        }
        else{
            
            echo '<div class="alert alert-info"> Preencha os campos com os dados do usuário.';
        }       
       ?>
        <!--<div class="alert alert-danger">-->
        
        <!--<div class="alert alert-success">-->
      <!--<div class="alert alert-info">
        Preencha os campos com os dados do usuário.-->
      </div>
			<div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="email" type="text" class="form-control" name="login" placeholder="Digite o Login" required autofocus>
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="password" type="password" class="form-control" name="senha" placeholder="Digite a senha">
            </div>
             <br>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input id="email" type="email" class="form-control" name="email" placeholder="Digite o email">
            </div>
            <br>
            <div class="form-group">
            <i  class="glyphicon glyphicon-sunglasses"></i> Selecione o tipo de usuário do sistema:<br>
                <input type="radio" value="admin" name="tipo" checked> Admin <br><input type="radio" value="user" name="tipo"> Usuário
            </div>
            <br>
            <div class="form-group">
                <label for="comment"><i class="glyphicon glyphicon-pencil"></i> Observação:</label>
                <textarea class="form-control" rows="5" id="comment" name="obs"></textarea>
            </div>
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-send"></i> Enviar</button>
            </div>

          </form>
    </div>
</body>
</html>
