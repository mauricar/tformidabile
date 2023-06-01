<?php
	include("class/cnn.php");

	//error_reporting(0);
	// include_once("inc/require.php");
	// include("class/funciones.php");
?>
<div id="content">
	<pre>
	<?php		
		$imagenes_id=$_POST['imagenes_id'];
		$producto_id=$_POST['producto_id'];
			
		echo "<h3 class='loading' >ELIMINANDO IMAGEN... </h3>"; 	

		$sql = "DELETE FROM `piedras_imagenes` WHERE producto_id='".$producto_id."' AND imagenes_id='".$imagenes_id."'";				
		$result = mysql_query($sql, $link) or die (mysql_error());
		
		// echo "<script>location.href='edit-producto.php?id=".$producto_id."'</script>";
		if($_POST['producto_action']=='carga'){
			echo "<script>location.href='cargar-imagenes.php?id=".$producto_id."'</script>";
		}else{
			echo "<script>location.href='edit-producto.php?id=".$producto_id."'</script>";
		}
	?>
	</pre>
</div>