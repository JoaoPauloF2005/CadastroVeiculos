CREATE DATABASE db_CadastroVeiculo;

use db_CadastroVeiculo;

CREATE TABLE Marca
(
  id int auto_increment,
  nome varchar(45) not null,
  primary key(id)
);

CREATE TABLE Fabricante
(
   id int auto_increment,
   nome varchar(45) not null,
   primary key (id)
);

CREATE TABLE Tipo
(
  id int auto_increment,
  nome varchar(45) not null,
  primary key (id)
);

CREATE TABLE Combustivel 
(
  id int auto_increment,
  nome varchar(45) not null,
  primary key (id)
);

CREATE TABLE Veiculo
(
  id int auto_increment,
  Modelo varchar(45) not null,
  Ano year not null,
  Cor varchar(45) not null,
  NumeroChassi varchar(17) not null,
  Kilometragem char(150) not null, 
  Revisao boolean,
  Sinistro boolean, 
  Roubo_Furto boolean,
  Aluguel boolean,
  Venda boolean,
  Particular boolean,
  Observacoes varchar(300) not null,
  id_Marca int not null,
  id_Fabricante int not null,
  id_Tipo int not null,
  id_Combustivel int not null,
  primary key (id),
  foreign key (id_Marca) references Marca(id),
  foreign key (id_Fabricante) references Fabricante(id),
  foreign key (id_Tipo) references Tipo(id),
  foreign key (id_Combustivel) references Combustivel(id)
);