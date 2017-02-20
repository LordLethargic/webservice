<?php
	$cURL = 'http://localhost/PDistribuida/alumno/cursos';
	$lURL = 'http://localhost/PDistribuida/alumno/listas';
	$cJSON = file_get_contents($cURL);
	$lJSON = file_get_contents($lURL);
	//$safe_json = str_replace("\n", "\\n", $cJSON);
	//$safe_json1 = str_replace("\n", "\\n", $lJSON));
	$cursos = json_decode($cJSON);
	$listas = json_decode($lJSON);
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
?>
