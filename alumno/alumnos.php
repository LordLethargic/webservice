<?php
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
		}else{
			header('http/1.1 405 METHOD NOT ALLOWED');
			exit;
	}
	echo json_encode($resultado);
?>
