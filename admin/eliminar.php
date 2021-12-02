<?php
include_once("conexion.php");
 
$codigo = $_GET['cod_alumno'];
 
mysqli_query($conexion, "DELETE FROM listaTareas WHERE cod_alumno=$codigo");
 
header("Location:todolist.php");

?>