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


CREATE TABLE IF NOT EXISTS listaTareas (
  cod_alumno int NOT NULL,
  usuario varchar(50) NOT NULL,
  asunto varchar(30) NOT NULL,
  descripcion varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE listaTareas ADD PRIMARY KEY (cod_alumno);

ALTER TABLE listaTareas MODIFY cod_alumno int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100001;
  
INSERT INTO listaTareas (cod_alumno, usuario, asunto,descripcion) VALUES
(100001, 'Alberto Sanchez', 'Programacion Movil', 'primer examne parcial el miercoles 01 diciembre '),
(100002, 'Juancarlos Flores', 'Ingienieria de Software', 'Proyecto to do list en php');
