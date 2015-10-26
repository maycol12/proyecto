
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

       $claveId = $_REQUEST['idSucursal'];
       $dirre = $_REQUEST['Dirrecion'];
       $Tel = $_REQUEST['Telefono'];

       $query = "UPDATE sucursal set Dirrecion='$dirre',Telefono='$Tel'  where idPizzeria='$claveId' ";
   	  		$var=mysql_query($query);
      if($var){
            echo "Datos Actualizados correctamente"; 
      }
      else{
            echo "Datos no Actualizados";
      }

       //mysqli_query($var, "UPDATE empleados set nombre='$Nombre' where claveId='$idEmpleados' ")
         // or die("Error al actualizar");

      // mysql_close($var);

       ?>
       <a href="sucursal.html">Volver</a>


</body>
</html>