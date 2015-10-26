<?php
     include("conexion.php");
     $consulta=mysql_query("select * from pedidos")or die(
     	mysql_error());
     
     $registro=mysql_fetch_array($consulta);
     echo "<table border>";
     do{
          
     	$no_pedido=$registro['no_pedido'];
     	
        echo "<tr> <td>  <td> $no_pedido </td> </tr>";

     }while($registro=mysql_fetch_array($consulta));
     echo "</table>";

 

?> 

<a href="pedidos.html">Volver</a>