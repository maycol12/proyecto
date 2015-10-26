<!DOCTYPE html>
<?php
      include("comprobacion.php");
?>
<html>
<head>
	<title>Actualizar</title>
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
       $nombre = $_REQUEST['Nombre'];
       $ApPaterno = $_REQUEST ['Apellido_Paterno'];
       $ApMaterno = $_REQUEST['Apellido_Materno'];
       $Tel = $_REQUEST['Telefono'];
       $Domi = $_REQUEST['Domicilio'];

       $query = "UPDATE empleados set nombre='$nombre'set Apellido_Paterno='$ApPaterno'set Apellido_Materno='$ApMaterno'set Telefono='$Tel'set Domicilio='$Domi'  where idEmpleados='$claveId' ";
   	  		$var=mysql_query($query);


       if($var){
            echo "Datos Actualizados correctamente"; 
      }
      else{
            echo "Datos no Actualizados";
      }

       /*mysql_query($var, "DELETE from empleados where idEmpleados='$claveId'")
             or die("Error al eliminar los datos");*/

       //mysql_close($var);
         
       ?>
        <a href="empleados.html">Volver</a>


</body>
</html>