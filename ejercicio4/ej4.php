<!doctype html>
<html lang="ES">
<head>
	<meta charset="UTF-8">
	<title>Práctica 4: Estado en las aplicaciones web</title>
	
	<style>
		.money, .unidades{
			text-align: right;
		}
	</style>
	
</head>
<body>
<!-- En primer lugar definimos la tabla donde representaremos los datos -->
	<table border="2">
		<caption>Tu carrito de la compra</caption>
		<tr>
		<th>Producto</th>
		<th>Unidades</th> 
		<th>Precio Unidad</th>
		</tr>
		<tr>
<!--Ahora insertamos el php, en el que primero determinaremos el precio en función de los datos recibidos -->		
		<?php
			session_start();
			switch ($_POST['producto']){
			case "Camiseta print Edwin":
				$precio=34.95;
				break;
			case "Gorra Topman":
				$precio=15.95;
				break;
			case "Zapatillas Adidas Original":
				$precio=89.95;
				break;
			case "Shdnewone-Mylologan - Traje":
				$precio=159.95;
				break;
			case "Jersey de punto - Kyomi":
				$precio=24.95;
				break;
			}
		$unidades=$_POST['unidades'];
		
		if(isset($_SESSION['total'])){
			$_SESSION['total']=$_SESSION['total']+($precio*$unidades);
		}
		else{
			$_SESSION['total']=$precio*$unidades;
		}
		
		if(isset($_SESSION['lista'])){
			$_SESSION['lista']=$_SESSION['lista']."<tr><td>".$_POST['producto']."</td><td class='unidades'>".$_POST['unidades']."</td><td class='money'>".$precio."€</td></tr>";
		}else{
			$_SESSION['lista']="<tr><td>".$_POST['producto']."</td><td class='unidades'>".$_POST['unidades']."</td><td class='money'>".$precio."€</td></tr>";
		}
		$lista=$_SESSION['lista'];
		echo($lista);
		echo("<tr><td colspan='2'>Total:</td><td class='money'>".$_SESSION['total']."€</td></tr>");
		
		//Dejamos indicado en comentario el cálculo del IVA, ya que en principio no se pide en la practica.
		// echo("<tr><td colspan='2'>IVA 21%:</td><td class='money'>".($_SESSION['total']*21/100)."€</td></tr>");
		// echo("<tr><td colspan='2'>TOTAL:</td><td class='money'>".($_SESSION['total']+($_SESSION['total']*21/100))."€</td></tr>");
	?>
	</table>
	<div>
		<a href="ej4.html">Seguir comprando</a><br/>
		<a href="CerrarSesion.php">Cerrar sesión</a>
		
	</div>	
</body>
</html>