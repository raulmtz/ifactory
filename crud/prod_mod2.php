<?php
include "conexion.php";

    $id=$_REQUEST['id'];
	$prod=$_REQUEST['name'];

$band=0;

if ($prod==""){
echo "Ingrese el Producto";
$band=1;
}

if ($band!=1) {

$sql="UPDATE ac01_productos SET producto='$prod', fecha_actualizacion=NOW() WHERE idp=$id";
//$sql="INSERT INTO productos VALUES ('$id','$prod',,NOW(),1)";
$resultado = mysql_query($sql,$conexion) or die ("Error consulta actualizar");

echo "<script LANGUAGE='JavaScript'>
alert('Producto modificado con exito');
 location.reload(true);
</script>
";

}

?>
