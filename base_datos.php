<?php
   class base_datos
   {
   	  var $conexion;

   	  public  function __construct()
   	  {
   	  $conexion = mysql_connect("localhost","root","");
   	  mysql_select_db("pizzeria",$conexion);
   	  }

   	  public function agregarEmpleados($idEmpleados,$Nombre,$apellido_Paterno,$apellido_Materno,$Domicilio,$Telefono,$Password)
   	  {
        $Password=sha1($Password);
   	  	$query = "INSERT INTO empleados(idEmpleados ,Nombre ,apellido_Paterno ,apellido_Materno ,Domicilio ,Telefono ,Password )
 VALUES('$idEmpleados','$Nombre','$apellido_Paterno','$apellido_Materno','$Domicilio','$Telefono','$Password');";
   	  		$var=mysql_query($query);
          echo($query);
          var_dump($var);

   	  		
   	  }



          public function agregarClientes($idClientes,$Nombre,$apellido_Paterno,$apellido_Materno,$Domicilio,$Telefono)
      {
      
        $query = "INSERT INTO clientes( idClientes ,Nombre ,apellido_Paterno ,Apellido_Materno ,Domicilio ,Telefono)

 VALUES('$idClientes','$Nombre','$apellido_Paterno','$apellido_Materno','$Domicilio','$Telefono');";
          $var=mysql_query($query);
          echo($query);
          var_dump($var);

          
      }
   



 public function agregarPaquetes($idPaquetes,$Categoria,$Nombre,$Precio)
      {
      
        $query = "INSERT INTO paquetes( idPaquetes ,Categoria ,Nombre,Precio)
 VALUES('$idPaquetes','$Categoria','$Nombre','$Precio');";
          $var=mysql_query($query);
          echo($query);
          var_dump($var);

          
      }
   
 public function agregarSucursal($idPizzeria,$Dirrecion,$Telefono)
      {
      
        $query = "INSERT INTO sucursal( idPizzeria, Dirrecion, Telefono)
 VALUES('$idPizzeria','$Dirrecion','$Telefono');";
          $var=mysql_query($query);
          echo($query);
          var_dump($var);

          
      }
      public function Pedidos ($idPedidos, $no_pedido)
      {
        $query = "INSERT INTO pedidos (idPedidos, no_pedido)
        VALUES('$idPedidos','$no_pedido');";
              $var=mysql_query($query);
              echo($query);
              var_dump($var);
      }
   
}

?>