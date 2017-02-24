<?php
	$cURL = 'http://localhost/PDistribuida/alumno/cursos';
	$lURL = 'http://localhost/PDistribuida/alumno/listas';
	$aURL = 'http://localhost/PDistribuida/alumno/alumnos';
	//var_dump($aURL);
	$cJSON = file_get_contents($cURL);
	$lJSON = file_get_contents($lURL);
	$aJSON = file_get_contents($aURL);
	//var_dump($aJSON);
	//$safe_json = str_replace("\n", "\\n", $cJSON);
	//$safe_json1 = str_replace("\n", "\\n", $aJSON));
	$cursos = json_decode($cJSON);
	$listas = json_decode($lJSON);
	$alumnos = json_decode($aJSON);
	echo '<h1>Alumnos</h1>';
	echo '<ul>';
	
	foreach ($listas as $lista) {
		echo "<li>".$lista."</li>";
	}
	echo '</ul>';

	echo '<h1>Cursos disponibles</h1>';
	echo '<ul>';
	foreach ($cursos as $curso) {
		echo "<li>".$curso."</li>";
	}
	echo '</ul>';

	echo '<h1>Alumnos 2</h1>';
	echo '<ul>';
	foreach($alumnos as $alumno){
		echo "<li>".$alumno->nombre."</li>";
	}
	echo '</ul>';
?>
