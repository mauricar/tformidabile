<?php
	//error_reporting(0);
	// include_once("inc/require.php");
	include("class/cnn.php");
	// include("class/funciones.php");
?>
<div id="content">
	<pre>
	<?php		
		$producto_id=$_POST['producto_id'];
			
		echo "<h3 class='loading' >ELIMINANDO PRODUCTO... </h3>"; 	

		$sql = "DELETE FROM `piedras_productos` WHERE producto_id='".$producto_id."'";				
		$result = mysql_query($sql, $link) or die (mysql_error());
		
		echo "<meta http-equiv='refresh' content='1;url=listado-de-productos.php' >";
	?>
	</pre>
</div>