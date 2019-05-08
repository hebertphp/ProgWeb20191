<?php
session_start();
$_SESSION=array();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
 <title>Login</title>
</head>
<body>
<form method="post" action="recebe.php">
Login <input type="text" name="login" value=""><br>
Senha <input type="password" name="senha" value=""><br>
<input type="submit" value="Enviar">
</form>
<?php
 echo md5("uninove");
 ?>
</body>
</html
