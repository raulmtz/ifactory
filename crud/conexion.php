<?php
/*Archivo que contiene la conexion a la base de datos*/


  $conexion=mysql_connect("localhost","root","")
   or die("error de conexion");

   $base=mysql_select_db("actividad01",$conexion)
  or die("error de base");

?>
