<?php 
	$conexion = null;

	function conectar()
	{
		global $conexion;
		
		$conexion = mysqli_connect('localhost', 'root', '', 'todolist');
		mysqli_set_charset($conexion, 'utf8');
		
	}



	

	function getUsuarios()
	{ 
		global $conexion;
		$respuesta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE admin<>1");		
		// return $respuesta->fetch_all();
		$respuestas_array = array();
		while ($fila = $respuesta->fetch_row())
		  $respuestas_array[] = $fila;
		return $respuestas_array;		
	}

	
	function validarLogin($usuario, $clave)
	{
		global $conexion;
		$consulta = "SELECT * FROM usuarios WHERE usuario='".$usuario."' AND clave='".$clave."'";
		$respuesta = mysqli_query($conexion, $consulta);
		
		if( $fila = mysqli_fetch_row($respuesta) )
		{
			session_start();
			$_SESSION['usuario'] = $usuario;
			$_SESSION['admin'] = $fila[2];
			return true;
		}
		return false;
	}


	function haIniciadoSesion()
	{
		session_start();
		return isset( $_SESSION['usuario'] );
	}

	function esAdmin()
	{
		return $_SESSION['admin'];
	}

	function desconectar()
	{
		global $conexion;
		mysqli_close($conexion);
	}



?>