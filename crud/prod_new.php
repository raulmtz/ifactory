<html>
<!--Archivo que contiene el formulario para el nuevo producto-->
<head>
<title>Actividad01-Raul-Nuevo Producto</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body> 
 <?php
//se incluye el archivo de conexion a la base de datos
	include"conexion.php";
//consulta para obtener el proximo id del producto						
$sql1 = "SELECT * FROM ac01_productos ORDER BY idp desc";
	$valor1 = mysql_query($sql1,$conexion)or die ("No se ejecuto consulta1");
										$filas1 = mysql_num_rows($valor1);
										//si $filas 1 es igual a cero
										if ($filas1 == 0) 
										{
										//$idm tendra un valor de 1
											$idp = 1;
										}
										else
										{
										//en caso contrario es obtendra el valor del ultimo registro y se le sumara un 1
											$idp= mysql_result($valor1,0,'idp') + 1;
										}
										
	
										?>
    <h3>Nuevo Producto</h3>
<form name="frmdo" id="frmdo"  target="_self">
    
    <table>
    <tr><td>Clave Producto:</td><td><input type="text" name="id" value="<?php echo $idp;?>" readonly></td></tr>
    <tr><td>Nombre Producto</td><td><input type="text" name="name" ></td></tr>
    <tr><td></td><td><input type="submit" name="Guardad" value="Guardar">  </td></tr>

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
						$('#desc').load('prod_new2.php?' + $('#frmdo').serialize())
};

						})
					})
        
</script>    
    
</body>
</html>
