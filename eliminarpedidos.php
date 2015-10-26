<!DOCTYPE html>
<html>
<head>
	<title>Eliminar</title>
</head>
<body>
        <?php
// datos de la base
       $servidor ="localhost";
       $usuario = "root";
       $clave ="";
       $base ="pizzeria";
       // establecemos la conexion con el servidoe
       $var=mysql_connect($servidor,$usuario,$clave);
       // seleccionamos la base de datos
       $bd_sel=mysql_select_db($base) or die("Problemas al seleccionar la base de datos");
       $var=mysql_select_db($base);

      
       $claveId = $_REQUEST['idPedidos'];
       $query = "DELETE from pedidos where idPedidos='$claveId'";
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

        <a href="sucursal.html">Volver</a>

</body>
</html>