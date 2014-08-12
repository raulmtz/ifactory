<html>
    <!--archivo para buscar un producto-->
<head>
<title>Actividad01-Raul-Buscar Productos</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body> 
    <h3>Buscar Producto</h3>
<form  action="prod_new.php" method="get" name="frmdo" id="frmdo"  target="_self">
    <table>
    <tr><td>Criterio:</td><td><input type="text" name="crit" ></td></tr>
    <tr><td></td><td><input type="submit" name="Buscar" value="Buscar">  </td></tr>
</table>
    
    
    </form>
    <div id="desc" class="desc">
<!--div donde se muestran resultados de la busqueda-->
    </div>
    
<script type="text/javascript">
    /*funcion que se activa al presionar en el boton buscar*/
	$(function (e) {
	$('#frmdo').submit(function (e) {
	e.preventDefault()
	$('#desc').load('prod_busc2.php?' + $('#frmdo').serialize())
	})
	})
</script>
</body>
</html>