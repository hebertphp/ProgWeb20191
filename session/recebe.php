<?php
session_start();
if ($_SERVER["REQUEST_METHOD"]!="POST"){
    header("location: login.php");
    exit();
}

$login = filter_input(INPUT_POST, 'login',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if($login=='aluno' && md5($senha)=='02bb12fbbc1dcf408d7dab12f43f5cf6'){
    $_SESSION['login']=$login;
    $_SESSION['time']=time();
    header("Location: pg1.php");
}
else{
  header("Location: login.php");
}
?>
