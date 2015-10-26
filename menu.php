<?php
	include("comprobacion.php");
?>
<html>
<head>
	<title>MENU</title>



</head>
<body>
	<meta charset = "utf-8">
	<h1> Pizzeria sicaru<br>
		<form method="POST" action="acciones.php">
			Nombre <input type="text" name="Nombre"/><br>
			Apellido Paterno<input type="text" name="apellido_paterno"/><br>
			Apellido Materno<input type="text" name="apellido_materno"/><br>
			Domicilio<input type="text" name="Domicilio"/><br>
			Teléfono<input type="text" name="Telefono"/><br>
			Password <input type="password" name="Password"/><br>
			<input type="hidden" name="formulario" value="agregarEmpleados">

			<button type="submit">Agregar</button>    
			<button type="submit">Modificar</button>
			<button type="submit">Eliminar</button>
		</form>
	<a href = "logout.php"> Cerrar sesion </a>
</body>
</html>