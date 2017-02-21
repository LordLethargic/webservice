<?php
	$server = "localhost";
	$user = "root";
	$pswd = "";
	$database = "PDistribuida";
	//Creando la conexion
	$conexion = mysqli_connect($server,$user, $pswd, $database) or die();
	function buscaAlumnos(){
		//echo "HOLA";
		$sql = "SELECT * FROM alumnos";
		//mysqli_set_charset($conexion, "utf8");
		if(!$result = mysqli_query($conexion, $sql)) die ();
		echo "HOLA";
		$alumnos = array();
		var_dump($fila = mysqli_fetch_array($result));
		while($fila = mysqli_fetch_array($result)){
			$mat = $fila['matricula'];
			echo $mat;
			$nombre = $fila['nombre'];
			$edad = $fila['edad'];

			$alumnos[] = array('matricula'=> $mat, 'nombre'=> $nombre, 'edad'=> $edad);
			var_dump($alumnos);
		}
		return alumnos;
	}
	
	function mostrarCursos(){
		$cursos = array('AngularJS','Base de Datos','POO','Ensamblador');
		return $cursos;
	}
	function mostrarAlumnos()
	{
		$alumnos = array('Wendy Torrance','Danny Torrance','Jack Torrance','Dick Halloran');
		return $alumnos;
	}
	if($_GET['solicitud'] =='cursos'){
		$resultado = mostrarCursos();
	}else if ($_GET['solicitud'] == 'listas'){
		$resultado = mostrarAlumnos();
		}else if($_GET['solicitud'] == 'alumnos'){
			//echo "listo";
			$resultado = buscaAlumnos();
			}else{
			header('http/1.1 405 METHOD NOT ALLOWED');
			exit;
	}
	echo json_encode($resultado);
?>
