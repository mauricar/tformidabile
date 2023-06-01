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
			
		echo "<h3 class='loading' >ELIMINANDO SUBCATEGORIA... </h3>"; 	

		$sql = "DELETE FROM `piedras_subcategorias` WHERE subcategoria_id='".$categoria_id."'";				
		$result = mysql_query($sql, $link) or die (mysql_error());
		
		echo "<meta http-equiv='refresh' content='1;url=listado-de-subcategorias.php' >";
	?>
	</pre>
</div>