<?php
function conectar(){
  global $conn;
  $conn = mysqli_connect(DB_HOST, DB_USUARIO, DB_SENHA, DB_DATABASE);
      if (!$conn) {
            die("Falha ao conectar com o servidor: " . mysqli_connect_error());
      }
      else {
            //echo "Conexão efetuada com sucesso!";//comentar após testar a conexão!
      }

}

function verifica_login(){
 if(!isset($_SESSION["login"])){
    header("location: index.php");
    exit;  
 }
}

?>
