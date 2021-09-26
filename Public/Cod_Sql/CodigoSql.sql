
-- CODIGO DE CRIAÇÃO DO BANCO DE DADOS

CREATE DATABASE crud;
USE crud;

CREATE TABLE tb_cadastro(
	id_cadastro int AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100)NOT NULL,
    email VARCHAR(50)NOT NULL
)DEFAULT charset utf8;

-- CODIGO DE INSERÇÃO
INSERT INTO tb_cadastro(nome,email)VALUES('danilo melo','teste@teste.com');