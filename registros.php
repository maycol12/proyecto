<!DOCTYPE html>
<html>
<head>
	<title>Consultar</title>
</head>
<body>
     <?php
     $servidor ="localhost";
       $usuario = "root";
       $clave ="";
       $base ="pizzeria";
       // establecemos la conexion con el servidoe
       $var=mysql_connect($servidor,$usuario,$clave);
       // seleccionamos la base de datos
       $bd_sel=mysql_select_db($base) or die("Problemas al seleccionar la base de datos");
       $var=mysql_select_db($base);


         $claveId = $_REQUEST['idEmpleados'];
         $query = "SELECT * from empleados where idEmpleados='$claveId'";
   	  		$var=mysql_query($query) or die("Error  al traer los datos");

         echo '<table border="1">';
         echo '<tr>';
         echo '<th Id="idEmpleados">idEmpleados</th>';
         echo '<th Id="Nombre">Nombre</th>';
         echo '<th Id="Nombre">Apellido_Paterno</th>';
         


         echo '</tr';

         while($tabla = mysql_fetch_array($var))
         {
         	
         	echo '<tr>';
         	echo '<td>'.$tabla['idEmpleados'].'</td>';
         }

        // mysql_close($var);
         echo '</table>';
       ?>

       <a href="empleados.html">Volver</a>

</body>
</html>