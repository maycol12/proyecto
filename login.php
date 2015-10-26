<?php
	$conexion = mysql_connect("localhost", "root", "");
	mysql_select_db("pizzeria", $conexion);
	$usuario = $_REQUEST['Nombre'];
	$pass = $_REQUEST['Password'];
	$query = "SELECT Usuario FROM empleados WHERE Usuario = '$usuario' AND Password = SHA1('$pass')";
	//echo $query;

	$res = mysql_query($query);
	var_dump($res);
	$num=mysql_num_rows($res);
	var_dump($num);
	$valido = mysql_fetch_array($res);
	var_dump($valido);
	if(isset($valido['Usuario']))
	{	
		session_start();
		$_SESSION['usuario'] = $valido['Usuario'];
		header("Location: menu.html");
	}
	else
	{
		echo "Contraseña incorrecta";
		//header("Location index.html");
	}

?>