<!doctype html>
<html lang="ES">
<head>
	<meta charset="UTF-8">
	<title>Práctica 4: Estado en las aplicaciones web</title>
</head>
<body>
	<div>
		<label for="nombre">Nombre:</label> <input type="text" id="nombre" onchange="hyperlink()"/><br/>
		
	</div>

	<div>
	<a id="confirmar">Confirmar su nombre</a><br/>
	<a href="index.html">Volver al Inicio</a><br/>
	<a href="Apellidos1.php">Escribir sus apellidos</a><br/>
	<a href="ComprobarDatos.php">Ver su nombre y apellidos</a><br/>
	<a href="CerrarSesion.php">Borrar la información</a><br/>
	</div>

</body>

<!-- Tenemos que generar JavaScript para poder acceder y modificar las propiedades que necesitamos cambiar -->
<script>
function hyperlink(){
	//Obtenemos el valor del elemento con id "nombre"
	var nombre=document.getElementById("nombre").value;
	//Localizamos el elemento enlace que actuará como confirmación y lo almacenamos
	var confirmar=document.getElementById("confirmar");
	//Generamos la expresión que anexaremos al elemento del DOM 
	var pasarelaGet="./Nombre2.php?nombre="+nombre;
	//Modificamos los atributos del elemento
	confirmar.setAttribute('href',pasarelaGet);
}

</script>
</html>