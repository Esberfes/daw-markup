<?php 
require_once("php/functions.php"); 
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="images/logos/logo-esbacademy.svg" sizes="any" type="image/svg+xml"> 
	
    <title>Home</title>
	
    <!-- GENERAL DEPENDENCIES -->
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/esber-framework.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/acordion.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
    <!-- ESPECIFIC PAGE DEPENDENCIES -->
	<link rel="stylesheet" href="css/gestor.css">
</head>
<body>

	<!-- NAVIGATION -->
	<div class="nav-sticky" id="nav"></div>
	
	<!-- HEADER -->
	<div id="header">
		<div id="particles-js"></div>
	</div>
	

    <main class="mt-5">
		<div class="container">
			<?php
				define("CURSOS_PATH", "xml/cursos.xml");
			
			
				$cursos_object = new Cursos(CURSOS_PATH);
			
				//var_dump($cursos_object->get_curso_by_id(1));
			
				/*
				$cursos = $cursos_object->get_cursos();
				foreach($cursos as $curso){
					echo $curso['id'];
				}
				*/
				// function add_curso($nombre,$categoria,$autor,$subtitulo,$indice_in,$descripcion_in, $duracion, $url_foto){
				$cursos_object->add_curso("Nombre" , "html", "Javier Casas", "subtitulo", "1 blabla :: 2 lo otro :: 3 que pasa", "desc1 :: desc2 :: desc 33", "20" , "https://udemy-images.udemy.com/course/240x135/1359608_2ee1_9.jpg");
			?>
			<div class="row main-form">
				<div class="col-3">
					<input placeholder="Nombre del curso" type="text">
				</div>
				<div class="col-3">
					<select name="" id="">
						<option value="html">html</option>
						<option value="css">css</option>
						<option value="js">js</option>
					</select>
				</div>
				<div class="col-3">
					<input placeholder="Autor" type="text">
				</div>
				<div class="col-3">
					<input placeholder="Duracion" type="number">
				</div>
				<div class="col-12">
					<input placeholder="Url foto" type="url" >
				</div>
				<div class="col-4">
					<textarea  cols="40" rows="10" placeholder="Subtitulo"></textarea>
				</div>
				<div class="col-4">
					<textarea  cols="40" rows="10" placeholder="Indice de contenidos"></textarea>
				</div>
				<div class="col-4">
					<textarea  cols="40" rows="10" placeholder="Descripcion"></textarea>
				</div>
			</div>
        </div>
    </main>

	<!-- FOOTER  -->
	<div id="footer"></div>

	<script src="js/particles.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/loadXML.js"></script>
	<script src="js/layout.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/acordion.js"></script>
	
	

</body>
</html>