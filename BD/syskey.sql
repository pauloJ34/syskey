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
funcao char(10),
primary key(id)
);
create table dados(
login varchar(45) not null,
senha varchar(35),
nome varchar(35),
cpf char(14),
funcao varchar(35),
primary key(cpf)
);
insert into login (login,senha) values ("ADM",md5("ADM"));
INSERT INTO chaves (numero, estado, usuario, horario, tipo) VALUES ('1', 'livre', 'níguem', '--:--/--:--', 'sala de aula');
INSERT INTO chaves (numero, estado, usuario, horario, tipo) VALUES ('10', 'agendado', 'ADM', '07:00/08:30', 'sala de aula');
INSERT INTO chaves (numero, estado, usuario, horario, tipo) VALUES ('100', 'em uso', 'ADM', '10:30/12:00', 'sala de aula');
