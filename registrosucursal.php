<?php
     include("conexion.php");
     $consulta=mysql_query("select * from sucursal")or die(
     	mysql_error());
     
     $registro=mysql_fetch_array($consulta);
     echo "<table border>";
     do{
          
     	$dirre=$registro['Dirrecion'];
     	$tel=$registro['Telefono'];
     	
        echo "<tr> <td> $dirre <td> $tel  </td> </tr>";

     }while($registro=mysql_fetch_array($consulta));
     echo "</table>";

 

?> 

<a href="sucursal.html">Volver</a>