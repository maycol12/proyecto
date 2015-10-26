<!DOCTYPE html>
<?php
  include("comprobacion.php");
?>
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

       $claveId = $_REQUEST['idPaquetes'];
       $cate = $_REQUEST['Categoria'];
       $nom = $_REQUEST ['Nombre'];
       $pre = $_REQUEST['Precio'];
       

       $query = "UPDATE paquetes set Categoria='$cate',Nombre='$nom',Precio='$pre'  where idPaquetes='$claveId' ";
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
        <a href="paquetes.html">Volver</a>

</body>
</html>