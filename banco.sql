drop database if EXISTS bdatividade;

create database bdatividade;

use bdatividade;

create table usuarios (
    id int not null AUTO_INCREMENT primary key,
    CPF int not null UNIQUE,
    nome VARCHAR(255) not null,
    senha  varchar(255) not null,
    email VARCHAR(255) not null
);