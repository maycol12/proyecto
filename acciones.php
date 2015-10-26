<?php
      include("comprobacion.php");
?>

<?php
    include("base_datos.php");
    $db = new base_datos();
    VAR_DUMP($_REQUEST["formulario"]); 

    if($_REQUEST["formulario"]  == "agregarEmpleados")
    {
        var_dump($_POST);
        echo("<br><br><br>");
        var_dump($_REQUEST);
        session_start();
        $_SESSION['id']=$_REQUEST["idEmpleados"];
    	if($_REQUEST["password"]  == $_REQUEST["confirmpassword"])
    		$db->agregarEmpleados($_REQUEST["idEmpleados"],$_REQUEST["Nombre"],$_REQUEST["apellido_paterno"],$_REQUEST["apellido_materno"],$_REQUEST["Domicilio"],$_REQUEST["Telefono"],$_REQUEST["password"]);
    	header("Location: empleados.php");

        echo "<h2>Dato Guardado</h2>";

    }

    
    
    if($_REQUEST["formulario"]  == "agregarClientes")
    {
        var_dump($_POST);
        session_start();
        $_SESSION['id']=$_REQUEST["idClientes"];
        echo("<br><br><br>");
            $db->agregarClientes($_REQUEST["idClientes"],$_REQUEST["Nombre"],$_REQUEST["apellido_paterno"],$_REQUEST["apellido_materno"],$_REQUEST["Domicilio"],$_REQUEST["Telefono"]);
        header("Location: clientes.php");
        

    }

    
     if($_REQUEST["formulario"]  == "agregarPaquetes")
         {

           
       $db->agregarPaquetes($_REQUEST["idPaquetes"],$_REQUEST["Categoria"],$_REQUEST["Nombre"],$_REQUEST["Precio"]);
        header("Location: paquetes.php");
        

         }

    if($_REQUEST["formulario"]  == "agregarSucursal")
         {

            var_dump($_REQUEST);
            $db->agregarSucursal($_REQUEST["idPizerria"],$_REQUEST["Dirrecion"],$_REQUEST["Telefono"]);
        header("Location: sucursal.php");
        

    }

    if($_REQUEST["formulario"] == "Pedidos")
    {
        var_dump($_REQUEST);
        $db->Pedidos($_REQUEST["idPedidos"],$_REQUEST["no_pedido"]);
        header("location: pedidos.php");
    }

  
?>