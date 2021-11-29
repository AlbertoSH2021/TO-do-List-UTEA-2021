DROP DATABASE IF EXISTS todolist;

			CREATE DATABASE todolist;
			USE todolist;

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
  cod_alumno int NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  usuario varchar(50) NOT NULL,
  asunto varchar(300) NOT NULL,
  estado varchar(30) NOT NULL
 
) ;


INSERT INTO  listaTareas (cod_alumno, usuario, asunto,estado) VALUES
(1, 'Alberto Sanchez', 'Programacion Movil','pendiente'),
(2, 'Juancarlos Flores', 'Ingienieria de Software','pendiente');
