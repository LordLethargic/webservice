<!DOCTYPE html>
<html>
	<head><title>Lista de alumnos</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maxium-scale=1.0, minium-scale=1.0">
		<link  rel = "stylesheet" type="text/css" href = "css/bootstrap.min.css">
		<link  rel = "stylesheet" type="text/css" href = "css/styles.css">
	</head>
	<body>
		<header>
			<div class="container">
				<h1>Listas de alumnos</h1>
			</div>
		</header>
		<div class="container-fluid">
		<section class="main row">
			<article class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
		<?php
		$cURL = 'http://localhost/PDistribuida/alumno/cursos';
		$lURL = 'http://localhost/PDistribuida/alumno/listas';
		$aURL = 'http://localhost/PDistribuida/alumno/alumnos';
		$cJSON = file_get_contents($cURL);
		$lJSON = file_get_contents($lURL);
		$aJSON = file_get_contents($aURL);
		$cursos = json_decode($cJSON);
		$listas = json_decode($lJSON);
		$alumnos = json_decode($aJSON);
		echo '<h1>Alumnos</h1>';
		echo '<ul>';
		foreach ($listas as $lista) {
			echo "<li>".$lista."</li>";
		}
		echo '</ul></article>';

		echo '<h1>Cursos disponibles</h1><aside class="col-xs-12 col-sm-12 col-md-6 col-lg-4">';
		echo '<ul>';
		foreach ($cursos as $curso) {
			echo "<li>".$curso."</li>";
		}
		echo '</ul></aside>';
		echo '<h1>Listas de alumnos</h1>';
		?>
		<div class = "row">
			<div class="col-md-4"><h3>Nombre</h3></div>
			<div class="col-md-4"><h3>Matricula</h3></div>
			<div class="col-md-4"><h3>Edad</h3></div>
		</div>
		<?php
		foreach($alumnos as $alumno){
			?>
			<div class="row">
			<?php
			echo "<div class=\"col-md-4\"><p>".$alumno->nombre."</p></div>";
			echo "<div class=\"col-md-4\"><p>".$alumno->matricula."</p></div>";
			echo "<div class=\"col-md-4\"><p>".$alumno->edad."</p></div>";
			?></div><?php
		}
		echo '</ul>';
	?>
</section>
</div>
	<script src = js/jquery.js></script>
	<script src = js/bootstrap.min.js></script>
	</body>
</html>
