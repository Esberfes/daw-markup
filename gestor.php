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
			<h1>Gestor de contenidos</h1>
			<hr>
			
			<h2>Añadir nuevo curso</h2>
			<div class="row main-form">
				<div class="col-3">
					<input id="nuevoNombre" placeholder="Nombre del curso" type="text">
				</div>
				<div class="col-3">
					<select id="nuevoCategoria" name="" id="">
						<option value="html">html</option>
						<option value="css">css</option>
						<option value="js">js</option>
					</select>
				</div>
				<div class="col-3">
					<input id="nuevoAutor" placeholder="Autor" type="text">
				</div>
				<div class="col-3">
					<input id="nuevoDuracion" placeholder="Duracion" type="number">
				</div>
				<div class="col-12">
					<input id="nuevoUrl" placeholder="Url foto" type="url" >
				</div>
				<div class="col-4">
					<textarea id="nuevoSubtitulo" cols="40" rows="10" placeholder="Subtitulo"></textarea>
				</div>
				<div class="col-4">
					<textarea  id="nuevoIndice" cols="40" rows="10" placeholder="Indice de contenidos"></textarea>
				</div>
				<div class="col-4">
					<textarea id="nuevoDescripcion"  cols="40" rows="10" placeholder="Descripcion"></textarea>
				</div>
				<div class="col-12"><div id="nuevoEnviar" class="e-btn">Enviar</div></div>
			</div>
			
			<hr>
			
			<h2>Eliminar curso</h2>
			<div class="row main-form">
				<div class="col-6">
					<input id="idEleminar" placeholder="Id del curso" type="number">
				</div>
				<div class="col-12">
					<div id="btnEliminar" class="e-btn">Eliminiar</div>
				</div>
			</div>
			
			<hr>
			
			<h2>Restaurar backup</h2>
			<div class="row main-form">>
				<div class="col-12">
					<div id="btnBackup" class="e-btn">Restaurar</div>
				</div>
			</div>
			
        </div>
		
		<hr>
    </main>

	<!-- FOOTER  -->
	<div id="footer"></div>

	<script src="js/particles.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/loadXML.js"></script>
	<script src="js/layout.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/gestor.js"></script>
	
	

</body>
</html>