create database bdatividade;

use bdatividade;

create table usuarios (
    CPF int PRIMARY KEY,
    nome VARCHAR(255) null,
    senha  varchar(255) null,
    email VARCHAR(255) null
);