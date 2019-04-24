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
  <title>PG2</title>
</head>
<body>
 <h1>PG1</h1> 
  Login=<?php echo $_SESSION['login']." ".date("d/m/Y H:i:s",$_SESSION['time'])." ".date("i:s",$agora); ?><br>
 
 <a href="pg2.php">PG1</a>  | <b>PG2</b> |  <a href="login.php">SAIR</a> | 

</form>
</body>
</html>
