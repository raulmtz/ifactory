<html>
<!--Archivo que contiene el formulario para modificar el producto -->
<head>
<title>Actividad01-Raul-Modificar Producto</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body> 
 <?php
//incluye el archivo de conexion a la base de datos
	include"conexion.php";

    $idp=$_GET['idp'];

//Consulta para obtener los datos del registro

$sql1 = "SELECT * FROM ac01_productos WHERE idp=$idp";
	$valor1 = mysql_query($sql1,$conexion)or die ("No se ejecuto consulta1");
	
	$idp= mysql_result($valor1,0,'idp');
	$producto= mysql_result($valor1,0,'producto');
	$fecha_creacion= mysql_result($valor1,0,'fecha_creacion');
	$fecha_actualizacion= mysql_result($valor1,0,'fecha_actualizacion');
	$est= mysql_result($valor1,0,'estado');
	if ($est==1) {
		$estado="Activo";
	}

		else{
			$estado="Inactivo";
	}								
	
										?>
    <h3>Modificar Producto</h3>
<form name="frmdo" id="frmdo"  target="_self">
    
    <table>
    <tr><td>Clave Producto:</td><td><input type="text" name="id" value="<?php echo $idp;?>" readonly></td></tr>
    <tr><td>Nombre Producto</td><td><input type="text" name="name" value="<?php echo $producto;?>"></td></tr>
    <tr><td>Creado</td><td><input type="text" name="fc" value="<?php echo $fecha_creacion;?>" readonly></td></tr>
    <tr><td>Fecha de Actualización </td><td><input type="text" name="fa" value="<?php echo $fecha_actualizacion;?>" readonly></td></tr>
    <tr><td>Estado</td><td><input type="text" name="estado" value="<?php echo $estado;?>" readonly></td></tr>

    <tr><td></td><td><input type="submit" name="Modificar" value="Modificar">  </td></tr>

    <tr><td></td><td></td></tr>
    
    </table>
    
    
    </form>
    
<div id="desc" class="desc">
</div>
    
<script type="text/javascript">
		$(function (e) {
		$('#frmdo').submit(function (e) {
			e.preventDefault()
var band=0;
var nom = document.frmdo.name.value;
if ( nom=="" ) {
alert('Ingrese Nombre del Producto');
return false;
band=1;
};

if (band==0) {
						$('#desc').load('prod_mod2.php?' + $('#frmdo').serialize())
};

						})
					})
        
</script>    
    
</body>
</html>
