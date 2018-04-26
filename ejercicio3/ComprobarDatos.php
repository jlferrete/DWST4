<!doctype html>
<html lang="ES">
<head>
	<meta charset="UTF-8">
	<title>Práctica 4: Estado en las aplicaciones web</title>
</head>
<body>
	<?php
		session_start();
		if(isset($_SESSION['nombre'])){
			$nombre=$_SESSION['nombre'];
		}else{
			$nombre="El nombre no ha sido almacenado correctamente. Vuelva a introducirlo, por favor";
		}
		if(isset($_SESSION['apellidos'])){
			$apellidos=$_SESSION['apellidos'];
		}else{
			$apellidos="Sus apellidos no han sido almacenados correctamente. Vuelva a introducirlos, por favor";
		}
	
	echo("El nombre de usuario almacenado es: ".$nombre." y sus apellidos son: ".$apellidos."<br/>");
	?>
	
	<a href="index.html">Volver al Inicio</a><br/>
	<a href="Nombre1.php">Volver a escribir su nombre</a><br/>
	<a href="Apellidos1.php">Volver a escribir sus apellidos</a><br/>
	<a href="CerrarSesion.php">Borrar la información</a><br/>
	
</body>
</html>