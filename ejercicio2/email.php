<!doctype html>
<html lang="ES">
<head>
	<meta charset="UTF-8">
	<title>Práctica 4: Estado en las aplicaciones web</title>
</head>
<body>
	<?php
		
		if(isset($_COOKIE['nombre'])){
		$nombre=$_COOKIE['nombre'];
		echo("El nombre introducido es ".$nombre."<br/>");
		}else{
		echo("Debe introducir un nombre válido");
		}		
	
	
		if(isset($_POST['telefono'])){
			$telefono=$_POST['telefono'];
			echo("El telefono introducido es ".$telefono."<br/>");
			setcookie('telefono',$telefono);
		}else{
		echo("No se ha enviado un telefono correctamente");	
		}
		
	?>
	
	<form action="confirmacion.php" method="POST">
		<label for="email">Introduzca su email:</label><input type="text" name="email" id="email"/>
		<button type="submit" name="enviarEmail" value="enviarEmail">Enviar</button>
	</form>
		
</body>
</html>