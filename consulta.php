<html>
<body>
<?php
include("conexion.php");
echo '<FORM METHOD="GET" ACTION="borrar2.php">Nombre<br>';
$query = "SELECT * FROM clientes ORDER BY idClientes";

$result = mysql_query($query) or die("Error en la instruccion SQL");
if ($row = mysql_fetch_array($result)){
echo "<table border = '1'>";
echo "<tr> ";
echo "<td><b>id</b></td> ";
echo "<td><b>Descripción</b></td> ";
echo "<td><b>Nombre</b></td> ";
echo "<td><b>Apellido_Paterno</b></td> ";
echo "<td><b>Apellido Materno</b></td> ";
echo "<td><b>Teléfono</b></td> ";
echo "<td><b>Domicilio</b></td> ";
echo "<td><b>Nombre de Cliente</b></td> ";
echo "</tr> ";
do {
echo "<tr> ";
echo "<td>".$row["idClientes"]."</td> ";
echo "<td>".$row["descripcion"]."</td> ";
echo "<td>".$row[""]."</td> ";
echo "<td>".$row["salario"]."</td> ";
echo "<td>".$row["email"]."</td> ";
echo "<td>".$row["telefono"]."</td> ";
echo "<td>".$row["empresa"]."</td>";
echo "<td>".$row["nombre"]."</td> ";
echo "<td><a href=modificar.php?id=".$row["id"].">Editar</a></td>";
echo "<td><a href=borrar2.php?id=".$row["id"].">Eliminar</a></td>";
echo "</tr> ";
} 
while ($row = mysql_fetch_array($result));

echo "</table>";
echo "</table> ";
} else {
echo "'Aún no hay datos que mostrar'";
}
?>
<a href=index.php>Insertar<a>
<a href=borrar.php>Borrar<a>
<a href=buscar.php>Buscar<a>
</form>
</body>
</html>