<?php
$conexion = new mysqli("localhost","root","","todolist");
	
	if($conexion->connect_errno)
	{
		echo "No hay conexión: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
	}
?>