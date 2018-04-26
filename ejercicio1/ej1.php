<!doctype html>
<html lang="ES">
<head>
	<meta charset="UTF-8">
	<title>Práctica 4: Estado en las aplicaciones web</title>
<?php
	
	if(isset($_POST['crear'])){
		
		//La función setcookie() puede tener hasta siete argumentos: setcookie($nombre, $valor, $expiracion, $ruta, $dominio, $seguridad, $solohttp)
		$nombre=$_POST['nombre'];
		$valor=$_POST['valor'];
		/* 	time — Devuelve el momento actual medido como el número de segundos desde la Época Unix (1 de Enero de 1970 00:00:00 GMT)... 
		Lo empleamos para fijar la hora a la que se debe de eliminar nuestra cookie. De forma homóloga lo usaremos para determinar luego
		el tiempo de vida restante */
		$vida=time()+$_POST['vida'];
		setcookie($nombre,$valor,$vida);
		//print_r($_COOKIE);
	}
	
	if(isset($_POST['comprobar'])){
		$comprobacion=null;
		//Creamos variable nombre que es igual al nombre enviado por post
		$nombre=$_POST['nombre'];
		if(isset($_COOKIE[$nombre])){
			//Obtenemos el valor de la cookie
			$valor=($_COOKIE[$nombre]);
			//Cambiamos el estado de la bandera 
			$comprobacion=1;
		}else{
			//Cambiamos el estado de la bandera
			$comprobacion=0;
		}
		//Ahora comprobamos el estado de la bandera y ejecutamos en consecuencia
		if($comprobacion==0){
			echo("No se encuentra la cookie seleccionada");
		}else{
			echo("El valor de la cookie ".$nombre." es: ".$valor);
			
		}
	}
	
	if(isset($_POST['borrar'])){
		$nombre=$_POST['nombre'];
		//Para borrar la cookie, cambiamos la fecha de expiración por una ya extinta.
		setcookie($nombre,'', time()-3600);
		echo("La cookie ".$nombre." ha sido borrada satisfactoriamente");
	}
?>
	
</head>
<body>

<div><a href="ej1.html">Volver</a><br/><div>
	
</body>
</html>