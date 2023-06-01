<?php
	//error_reporting(0);
	// include_once("inc/require.php");
	include("class/cnn.php");
	// include("class/funciones.php");
?>
<div id="content">
	<pre>
	<?php		
		$categoria_id=$_POST['categoria_id'];
			
		echo "<h3 class='loading' >ELIMINANDO CATEGORIA... </h3>"; 	

		$sql = "DELETE FROM `piedras_categorias` WHERE categoria_id='".$categoria_id."'";				
		$result = mysql_query($sql, $link) or die (mysql_error());
		
		echo "<meta http-equiv='refresh' content='1;url=listado-de-categorias.php' >";
	?>
	</pre>
</div>