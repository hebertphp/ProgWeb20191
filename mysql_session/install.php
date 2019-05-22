<?php
include "init.php";
conectar();

$sql="create table IF NOT EXISTS usuario(
	id int not null primary key auto_increment,
	login varchar(30) not null,
	senha varchar(32) not null,
	email varchar(150) not null,
	tipo varchar(5) not null,
	data datetime,
	obs varchar(200),
	UNIQUE (email)
	)ENGINE= InnoDB;";

  $query = mysqli_query($conn,$sql) or die (mysqli_error($conn));
  echo "<h1>Tabela criada com Sucesso!</h1>";

  $sql2="INSERT INTO usuario (id, login, senha, email, tipo, data, obs)
          VALUES (NULL, 'adm', MD5('adm'), 'teste@teste.com', 'admin', NOW(), 'Usuário admin');";
  $query = mysqli_query($conn,$sql2);
  $erro2=mysqli_error($conn);
  if($erro2==""){
    echo "<h2>Usuário criado!</h2>";
  }
  else {
      echo "<h2>Usuário já existe!</h2>";
  }
?>
