CREATE DATABASE loja;

USE loja;

CREATE TABLE produtos(id int auto_increment primary key,
nome varchar(255),
preco decimal(12,2));

desc produtos;
