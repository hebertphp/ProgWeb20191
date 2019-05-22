<?php
session_start();
include "init.php";
conectar();
$_SESSION["msg_sistema"]="";
$_SESSION["usuario"]=array();

$login = filter_input(INPUT_POST, 'login',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$tipo = filter_input(INPUT_POST, 'tipo',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$obs = filter_input(INPUT_POST, 'obs',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$sql_insert="INSERT INTO usuario (id, login, senha, email, data, obs)
        VALUES (NULL, '$login', MD5('$senha'), '$email', NOW(), '$obs');";

$sql_select="select email from usuario where email='$email'";

$query = mysqli_query($conn,$sql_select);
$count=mysqli_num_rows($query);
 echo "<h1> $sql_select - ($count)</h1>";
 if ($count==0){
   echo "<h1> $sql_insert - ($count)</h1>";
     $_SESSION["msg_sistema"]="caduserok";
     $query1 = mysqli_query($conn,$sql_insert);      
        header("location: cadastrarusuario.php");
 }
 else {
   echo "<h1> E-mail já existe!</h1>";# code...
   $_SESSION["msg_sistema"]="E-mail já cadastrado!";
   $_SESSION["usuario"]["login"]=$login;
   $_SESSION["usuario"]["obs"]=$obs;

   header("location: cadastrarusuario.php");
 }

mysqli_close($conn);
//header("location: cadastrarusuario.php");

?>
