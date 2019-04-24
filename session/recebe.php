<?php
session_start();
$login=$_POST["login"];
$senha=$_POST["senha"];

if($login=='aluno' && md5($senha)=='02bb12fbbc1dcf408d7dab12f43f5cf6'){
    $_SESSION['login']=$login;
    $_SESSION['time']=time();
    header("Location: pg1.php");
}
else{
  header("Location: login.php");
}
?>
