<?php
	function buscaAlumnos(){
		$server = "localhost";
		$user = "root";
		$pswd = "";
		$database = "PDistribuida";
		$conexion = mysqli_connect($server,$user, $pswd, $database);
		if($conexion->connect_errno){
			printf("conexion fallida");
		}
		$l = array();	
		if(!($alumno = $conexion->query('SELECT * FROM alumnos')))
			echo 'Algo ocurrio mal';
		while($fila = $alumno ->fetch_assoc()){
			$l[]=$fila;
		}
		return $l;
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
