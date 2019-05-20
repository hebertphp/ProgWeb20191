<?php
      $servidor = "localhost";
      $usuario = "id651093_root";
      $senha = "php2019";
      $db = "id651093_php2019";

      $conn = mysqli_connect($servidor, $usuario, $senha, $db);
      if (!$conn) {
            die("Falha ao conectar com o servidor: " . mysqli_connect_error());
      }
      else {
            echo "Conexão efetuada com sucesso!";//comentar essa linha após testar a conexão
      }

    $sql="create table IF NOT EXISTS usuario(
	id int not null primary key auto_increment,
	login varchar(30) not null,
	senha varchar(32) not null,
	email varchar(150) not null,
	data datetime,
	obs varchar(200),
	UNIQUE (email)
	)ENGINE= InnoDB;";

  $query = mysqli_query($conn,$sql) or die (mysqli_error($query));
  echo "<h1>Tabela criada com Sucesso!</h1>";

?>
