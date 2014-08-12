<?php
/*incluye el archivo de conexion*/
include "conexion.php";
//obtiene el id del link
    $idp=$_GET['idp'];

//Actualiza el registro para desactivar el producto
    $sql="UPDATE ac01_productos SET estado=0, fecha_actualizacion=NOW() WHERE idp=$idp";


$resultado = mysql_query($sql,$conexion) or die ("Error consulta eliminar") ;
//muestra alerta de que se a Desactivado el producto
echo "
<script LANGUAGE='JavaScript'>
alert('Producto desactivado con exito');
//redirecciona a la busqueda
  window.location='prod_busc.php'; 
</script>
";



?>
