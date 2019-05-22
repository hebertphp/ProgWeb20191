<?php
session_start();
$err = filter_input(INPUT_GET, 'erro',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
print_r($_SESSION);
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
      <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-education"></span> Prof. Hebert</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
    </ul>
      <a class="btn btn-default  navbar-btn navbar-right" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
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
        <form method="post" action="recebelogin.php">
            <h2>Login de Usuário</h2>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="email" type="text" class="form-control" name="login" placeholder="Digite o Login" required autofocus>
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="password" type="password" class="form-control" name="senha" placeholder="Digite a senha" required>
            </div>
            <br>
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-log-in"></i> Enviar</button>
            </div>
          </form>
    </div>
  </div>
</div>


</body>
</html>
