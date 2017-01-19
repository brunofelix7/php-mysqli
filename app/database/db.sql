--	Cria a base de dados 'php-mysqli'
CREATE DATABASE bf_php_mysqli;
USE php_mysqli;

--	Cria a tabela 'clientes'
CREATE TABLE bf_clientes(
	id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	nome VARCHAR(45) NOT NULL,
	email VARCHAR(45) NOT NULL,
	idade INT UNSIGNED NOT NULL,
	status INT UNSIGNED NOT NULL,
	CONSTRAINT pk_clientes
	PRIMARY KEY(id)
);