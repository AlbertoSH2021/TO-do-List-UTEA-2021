DROP DATABASE IF EXISTS intranet;

CREATE DATABASE intranet;
USE intranet;

CREATE TABLE usuarios(
	usuario varchar(45) PRIMARY KEY,
	clave varchar(45) NOT NULL,
	admin boolean NOT NULL
);

INSERT usuarios VALUES
('UsuarioTest', '1234', 0),
('UsuarioPrueba', '1234', 0),
('Admin', '1234', 1);

