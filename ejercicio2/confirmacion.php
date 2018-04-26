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

		if(isset($_COOKIE['telefono'])){
		$telefono=$_COOKIE['telefono'];
		echo("El telefono introducido es ".$telefono."<br/>");
		}else{
		echo("Debe introducir un nombre válido");
		}
	
	
		if(isset($_POST['email'])){
			$email=$_POST['email'];
			setcookie('email',$email);
			echo("El email introducido es ".$email."<br/>");
		}else{
		echo("No se ha enviado un email correctamente");	
		}
		
	?>
	
	<form action="resumen.php" method="POST">
		<button type="submit" name="confirmarDatos" value="confirmarDatos">Confirmar Datos</button>
		<button type="submit" name="cancelar" value="cancelar">Cancelar</button>
	</form>
		
</body>
</html>