<?php
// datos de la base
       $servidor ="localhost";
       $usuario = "root";
       $clave ="";
       $base ="pizzeria";
       // establecemos la conexion con el servidoe
       $var=mysql_connect($servidor,$usuario,$clave);
       // seleccionamos la base de datos
       $bd_sel=mysql_select_db($base) or die("Problemas al seleccionar la base de datos");
       $var=mysql_select_db($base);

       ?>