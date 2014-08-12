<?php
/*se incluye el archivo de la conexion*/
include "conexion.php";

/*obtiene la variable del criterio de busqueda*/
$criterio=$_REQUEST['crit'];


if($criterio!="")
{
/*si el criterio es diferente de nulo realiza la siguiente consulta*/
$sql="SELECT *
    FROM ac01_productos
    WHERE 
    (idp LIKE '%$criterio%' 
    OR producto LIKE '%$criterio%'
    OR fecha_creacion LIKE '%$criterio%'
    OR fecha_actualizacion LIKE '%$criterio%'
    OR estado LIKE '%$criterio%')";
    $consulta=mysql_query($sql) or die("error en la consulta");
    $registros=mysql_num_rows($consulta);
}
/*en caso contrario obtiene todos los registros*/
else{
$sql="SELECT * FROM ac01_productos";
$consulta=mysql_query($sql) or die("error en la consulta");
$registros=mysql_num_rows($consulta);
}
/*si la consulta obtiene resultados crea la tabla para mostrar los registros*/
if ($registros>=1)
    {
    /*crea los titulos de la tabla*/
        echo "<table border='1'><tr>
        <th>Clave</th>
        <th>Producto</th>
        <th>Fecha de Creacion</th>
        <th>Fecha de Actualizacion</th>
        <th>Estado</th>
        <th>Mod</th>
        <th>Elim</th>
        </tr>";
        for($y=0;$y<$registros;$y++)
        {
            /*obtiene los valores de la consulta*/
            $idp=mysql_result($consulta,$y,"idp");
            $producto=mysql_result($consulta,$y,"producto");
            $fecha_creacion=mysql_result($consulta,$y,"fecha_creacion");
            $fecha_actualizacion=mysql_result($consulta,$y,"fecha_actualizacion");
            $est=mysql_result($consulta,$y,"estado");
            /*para determinar si un registro esta activo o inactivo de acuerdo al valor de 1 o 0*/
                if ($est==1) {
        $estado="Activo";
    }

        else{
            $estado="Inactivo";
    }
            /*muestra los resultados en filas*/
           echo "<tr class='a'>
            <td>
            $idp</td>
            <td >$producto</td>       
            <td>$fecha_creacion</td>
            <td>$fecha_actualizacion</td>
            <td>$estado</td>
            <td><a href=prod_mod.php?idp=".$idp."><IMG SRC='images/mod.png'/></a></td>
            <td><a href='prod_del.php?idp=".$idp."'><IMG SRC='images/eli.png'/></a></td>
            </td>
            </tr>";

            
        }
    /*cierra la tabla y muestra el numero de registros encontrados*/
    echo "</table>";
            
    echo '<br>se encontraron '.$registros.' registro(s) con el criterio: '.$criterio;
    }
 /*en caso de que la consulta no obtenga resultados, muestra el siguiente mensaje*/
    else
    {
    echo "no se encontaron registros con el criterio indicado";
    }

?>
