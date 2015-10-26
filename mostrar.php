<?php
     include("conexion.php");
     $consulta=mysql_query("select * from empleados")or die(
     	mysql_error());
     
     $registro=mysql_fetch_array($consulta);
     echo "<table border>";
     do{
          
     	$nom=$registro['Nombre'];
     	$apPaterno=$registro['Apellido_Paterno'];
     	$apMaterno=$registro['Apellido_Materno'];
     	$dom=$registro['Domicilio'];
     	$tel=$registro['Telefono'];
        echo "<tr> <td> $nom <td> $apPaterno <td> $apMaterno <td> $dom <td> $tel </td> </tr>";

     }while($registro=mysql_fetch_array($consulta));
     echo "</table>";

 

?>     