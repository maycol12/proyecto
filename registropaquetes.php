<?php
      include("comprobacion.php");
?>

<?php
     include("conexion.php");
     $consulta=mysql_query("select * from paquetes")or die(
     	mysql_error());
     
     $registro=mysql_fetch_array($consulta);
     echo "<table border>";
     do{
          
     	$cate=$registro['Categoria'];
     	$nom=$registro['Nombre'];
     	$pre=$registro['Precio'];
        echo "<tr> <td>  <td> $cate <td> $nom <td> $pre  </td> </tr>";

     }while($registro=mysql_fetch_array($consulta));
     echo "</table>";

 

?>  
    <a href="paquetes.html">Volver</a>