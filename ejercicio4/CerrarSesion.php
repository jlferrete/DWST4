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
	
	<a href="ej4.html">Volver al Inicio</a><br/>
		
</body>
</html>