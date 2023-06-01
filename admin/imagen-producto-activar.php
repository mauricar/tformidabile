<?php
		error_reporting(0);
	
	header("Content-Type: text/html;charset=utf-8");
    mysql_query("SET NAMES 'utf8'");

    	include("class/cnn.php");
	

	echo "<h3 class='loading' >ACTUALIZANDO IMAGEN... </h3>";

	/* VARIABLES */
	$imagenes_id = $_POST['imagenes_id'];
	$producto_id = $_POST['producto_id'];

	$sqlImagenPrincipal1 = "UPDATE `piedras_imagenes` SET  
	`imagenes_estado` =  '0'
	WHERE `producto_id` = $producto_id";

	$sqlImagenPrincipal2 = "UPDATE `piedras_imagenes` SET  
	`imagenes_estado` =  '1'
	WHERE `imagenes_id` = $imagenes_id";

	$resultadoActualizarsqlImagenPrincipal1 = mysql_query($sqlImagenPrincipal1);
	$resultadoActualizarsqlImagenPrincipal1 = mysql_query($sqlImagenPrincipal2);
	      
	// echo "<script>location.href='edit-producto.php?id=".$producto_id."'</script>";
	if($_POST['producto_action']=='carga'){
		echo "<script>location.href='cargar-imagenes.php?id=".$producto_id."'</script>";
	}else{
		echo "<script>location.href='edit-producto.php?id=".$producto_id."'</script>";
	}

?>