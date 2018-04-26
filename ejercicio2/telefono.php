<!doctype html>
<html lang="ES">
<head>
	<meta charset="UTF-8">
	<title>Práctica 4: Estado en las aplicaciones web</title>
</head>
<body>
	<?php
		
		if(isset($_POST['nombre'])){
			$nombre=$_POST['nombre'];
			echo("El nombre introducido es ".$nombre."<br/>");
			setcookie('nombre',$nombre);
		}else{
		echo("No se ha enviado un nombre correctamente");	
		}	
	?>
	
	<form action="email.php" method="POST">
		<label for="telefono">Introduzca su telefono:</label><input type="text" name="telefono" id="telefono"/>
		<button type="submit" name="enviarTelefono" value="enviarTelefono">Enviar</button>
	</form>
		
</body>
</html>