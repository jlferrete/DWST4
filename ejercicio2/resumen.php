<!doctype html>
<html lang="ES">
<head>
	<meta charset="UTF-8">
	<title>Práctica 4: Estado en las aplicaciones web</title>
</head>
<body>
	<?php
		
		if(isset($_POST['confirmarDatos'])){
			echo("Sus datos han confirmados. Gracias.");
		}
		
		if(isset($_POST['cancelar'])){
			
			setcookie('nombre', '', time() - 3600);
			setcookie('telefono', '', time() - 3600);
			setcookie('email', '', time() - 3600);
			echo("Sus datos han sido eliminados. Gracias.");
		}
		
		
	?>
	
</body>
</html>