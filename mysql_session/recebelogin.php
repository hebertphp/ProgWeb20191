<?php
session_start();
include "init.php";
conectar();

Echo "OK!";

$login = filter_input(INPUT_POST, 'login',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$sql="select * from usuario where login='$login' and senha=md5('$senha')";
  $query = mysqli_query($conn,$sql);
  $erro2=mysqli_error($conn);
  $result=mysqli_fetch_all($query,MYSQLI_ASSOC);
  $count=count($result);
echo "<h1>Login: $login, Senha: $senha<br> $sql (".count($result).")</h1>";
echo "<pre>";
print_r($result);

if($count==0){
	header("location: login.php?erro=user");
}else{
	$_SESSION["id"]=$result[0]["id"];
	$_SESSION["login"]=$result[0]["login"];
	$_SESSION["tipo"]=$result[0]["tipo"];
	$_SESSION["email"]=$result[0]["email"];
	
	print_r($_SESSION);
	header("location: homesistema.php");
}	
 ?>
