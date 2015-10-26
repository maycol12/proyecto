<?php
$id=$_POST['idClientes'];
$descripcion=$_POST['descripcion'];
$nombre=$_POST['Nombre'];
$apPaterno=$_POST['Apellido_Paterno'];
$apMaterno=$_POST['Apellido Materno'];
$domicilio=$_POST['Domicilio'];
$telefono=$_POST['Telefono'];
include("conexion.php"); 
$query="select id from Clientes where id=".$id;
$result=mysql_query($query) or die("Error en la instruccion SQL");
if (mysql_num_rows($result) > 0) {
echo "El registro ya se encuentra insertado </br>";
echo "<a href=index.php>Atrás</a>";
} elseif (mysql_num_rows($result) == 0) {
$query="insert into Clientes(idClientes,Nombre,Apellido_Paterno,Apellido Materno, Domicilio, Telefono)
values($id,'$nombre','$apPaterno',$amMaterno,'$domicilio',$telefono,')";
$result=mysql_query($query) or die("Error ejecutar la instrucción SQL ".mysql_error());
echo "Registro guardado<br/>";
echo "<a href=index.php>Atras</a>";
mysql_close();
}
?>