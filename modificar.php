
<meta charset ="utf-8" />
<?php
  include("conexion.php");
  $con=mysql_query("select * from clientes");
  $reg=mysql_fetch_array($con);

  ?>

  <form action="" method="post">
     <select name="clientes">
        <?php
            do{
            	$id=$reg['idClientes'];
            	$nom=$reg['Nombre'];
            	$apPaterno=$reg['Apellido_Paterno'];
            

         ?>   	
          <option value="<?php echo $id; ?>" ><?php echo $nom?> <?php echo $apPaterno?> 
             <?php
            }while($reg=mysql_fetch_array($con));
       
              ?>
      </select>
      <input type="submit" name="actu "  value ="Actualizar" />
   </form>
   <?php
      if(isset($_POST['actu'])){
      	$c=$_POST['clientes'];
      	$con1=mysql_query("select * from clientes 
      		where id ='$c'")or die(mysql_error());
      	$reg1 = mysql_fetch_array($con1);
      	$nom=$reg1['Nombre'];
      	$apPaterno=$reg1['Apellido_Paterno'];
      	$apMaterno=$reg1['Apellido Materno'];
      	$dom=$reg1['Domicilio'];
      	$tel=$reg1['Telefono'];

    ?>   
        <form method="POST"> 
        Nombre:<input name="nom" value="<?php echo $nom; ?>
        " /><br />
        Apellido Paterno:<input name="apPaterno" value="<?php echo $apPaterno; ?>
        "/><br />
        Apellido Materno:<input name="apMaterno" value="<?php echo $apMaterno; ?>
        " /><br />
        Domicilio:<input name="dom" value="<?php echo $dom; ?>
        "/><br />
        Telefono:<input name="tel" value="<?php echo $tel; ?>
        "/><br />

        <input type="hidden" name="id" value="<?php
               echo "$c"; ?>"  />
         <input value = "Actualizar"type="submit" name="Dato modificado" />
      </form>      
       
    <?php  	
      }
   ?>

   <?php
       if(isset($_['Dato modificado'])){
       	$id=$_POST['id'];
       	$nom=$_POST['nom'];
       	$apPaternoo=$_POST['apPaterno'];
       	$apMaterno=$_POST['apMaterno'];
       	$dom=$_POST['dom'];
       	$tel=$_POST['tel'];
       	mysql_query("update clientes set Nombre='$nom',
       		Apellido_Paterno='$apPaterno',Apellido Materno='$apMaterno',
       		Domicilio='$dom',Telefono='tel' where id='$idClientes'")or die(mysql_error());
       	echo "<script>alert´('Dato actualizado') 
       	   location='actualizar'</script";

       }


   ?>