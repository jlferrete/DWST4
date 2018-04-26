<!doctype html>
<html lang="ES">
<head>
	<meta charset="UTF-8">
	<title>Práctica 4: Estado en las aplicaciones web</title>
</head>
<body>
	<div><p>La sesión ha sido cerrada correctamente</p></div>
	<?php
		session_start();
		session_destroy();
	?>
	
	<a href="index.html">Volver al Inicio</a><br/>
	<a href="Nombre1.php">Volver a escribir su nombre</a><br/>
	<a href="Apellidos1.php">Volver a escribir sus apellidos</a><br/>
	<a href="ComprobarDatos.php">Borrar la información</a><br/>
	
</body>
</html>