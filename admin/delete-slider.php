<?php
	//error_reporting(0);
	// include_once("inc/require.php");
	include("class/cnn.php");
	// include("class/funciones.php");
?>
<div id="content">
	<pre>
	<?php		
		$slider_id=$_POST['slider_id'];
			
		echo "<h3 class='loading' >ELIMINANDO SLIDE... </h3>"; 	

		$sql = "DELETE FROM `piedras_slider` WHERE slider_id='".$slider_id."'";				
		$result = mysql_query($sql, $link) or die (mysql_error());
		
		echo "<meta http-equiv='refresh' content='1;url=listado-de-slides.php' >";
	?>
	</pre>
</div>