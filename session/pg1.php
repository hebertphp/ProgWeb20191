<?php
session_start();
date_default_timezone_set("America/Sao_Paulo");
$agora=time() - $_SESSION['time'];
if(!isset($_SESSION["login"])){
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head> 
<meta charset="utf-8"/>
  <title>PG1</title>
</head>
<body>
 <h1>PG1</h1> 
  Login=<?php echo $_SESSION['login']." ".date("d/m/Y H:i:s",$_SESSION['time'])." ".date("i:s",$agora); ?><br>
 
  <b>PG1</b> | <a href="pg2.php">PG2</a> |  <a href="login.php">SAIR</a> | 

</form>
</body>
</html>
