<?php
//incluye el archivo de conexion
include "conexion.php";
//obtiene los valores del formulario
    $id=$_REQUEST['id'];
	$prod=$_REQUEST['name'];

$band=0;
//comprueba el nombre del producto no este vacio
if ($prod==""){
echo "Ingrese el Producto";
$band=1;
}

if ($band!=1) {
    //si es correcto inserta el producto en la base de datos
$sql="INSERT INTO ac01_productos VALUES ('$id','$prod',NOW(),NOW(),1)";
$resultado = mysql_query($sql,$conexion) ;
//muestra la alerta de que ha sido registrado con exito
    //y recarga la pagina
echo "<script LANGUAGE='JavaScript'>
alert('Producto registrado con exito');
 location.reload(true);
</script>
";

}

?>
