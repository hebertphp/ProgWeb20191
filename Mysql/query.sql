create table IF NOT EXISTS usuario(
id int not null primary key auto_increment,
login varchar(30) not null,
senha varchar(32) not null,
email varchar(150) not null,
data date,
obs varchar(200)
);
