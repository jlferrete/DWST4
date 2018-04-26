<!doctype html>
<html lang="ES">
<head>
	<meta charset="UTF-8">
	<title>Práctica 4: Estado en las aplicaciones web</title>
</head>
<body>
	<div><p>Ha introducido su nombre correctamente. Sus datos serán almacenados.</p></div>
	<?php
		session_start();
		$nombre=$_GET['nombre'];
		$_SESSION['nombre'] =$nombre;
	?>

<a href="index.html">Volver al Inicio</a><br/>
<a href="Nombre1.php">Volver a escribir su nombre</a><br/>
<a href="Apellidos1.php">Escribir sus apellidos</a><br/>
<a href="ComprobarDatos.php">Ver su nombre y apellidos</a><br/>
<a href="CerrarSesion.php">Borrar la información</a><br/>

</body>
</html>