<?php
	error_reporting(0);
	header("Content-Type: text/html;charset=utf-8");
    mysql_query("SET NAMES 'utf8'");

	include("class/cnn.php");
?>
<div id="content">
	<pre>
<?php
	echo "<h3 class='loading' >ACTUALIZANDO PRODUCTO... </h3>";

		/* VARIABLES */
	$producto_id = $_GET['id'];
	if ( isset( $_GET['add']) ){
		$sqlActualizarProducto = 'UPDATE piedras_productos SET 
			
				producto_destacado =  1
			WHERE producto_id = ' .$producto_id;
			
			$resultadoActualizarProducto = mysql_query($sqlActualizarProducto);
	}
	else if ( isset( $_GET['remove']) ){
		$sqlActualizarProducto = 'UPDATE piedras_productos SET 
			
				producto_destacado =  0
			WHERE producto_id = ' .$producto_id;
			
			$resultadoActualizarProducto = mysql_query($sqlActualizarProducto);
	}

	

	echo "<meta http-equiv='refresh' content='0;url=listado-de-productos.php'>";

?>
</pre>
</div>