create database syskey
default character set utf8
default collate utf8_general_ci;

use systey; 

create table chaves(
numero tinyint zerofill,
estado varchar(35),
usuario varchar(35),
horario char(15),
tipo varchar(35),
primary key(numero)
);

create table login(
id int not null auto_increment,
login varchar(45) not null,
senha varchar(35),
primary key(id)
);
create table loginP(
id int not null auto_increment,
login varchar(45) not null,
senha varchar(35),
primary key(id)
);

create table dados(
id int not null,
login varchar(45) not null,
senha varchar(35),
nome varchar(35),
cpf char(14),
funcao varchar(35),
primary key(cpf)
);
