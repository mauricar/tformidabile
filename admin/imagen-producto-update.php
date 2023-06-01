<?php
	// error_reporting(0);
	//header("Content-Type: text/html;charset=utf-8");
    // mysql_query("SET NAMES 'utf8'");

	include("class/cnn.php");

	/* VARIABLES */
	$imagenes_id = $_POST['imagenes_id'];
	$producto_id = $_POST['producto_id'];

	//Comprobamos si el fichero es una imagen
	if($_FILES["producto_imagen"]["name"]<>''){
		if ($_FILES['producto_imagen']['type']=='image/png' || $_FILES['producto_imagen']['type']=='image/jpeg'){			
			$rand = substr(sha1(md5(time())),2,4);
			$archivo = $rand.$_FILES["producto_imagen"]["name"];
			//Subimos el fichero al servidor
			move_uploaded_file($_FILES["producto_imagen"]["tmp_name"], "../images_admin/productos/".$archivo);

			$sqlImagen = "UPDATE `piedras_imagenes` SET `imagenes_nombre` = '$archivo' WHERE `imagenes_id` =$imagenes_id;";

			$resultImagen = mysql_query($sqlImagen, $link);

			if($_POST['producto_action']=='carga'){
				echo "<script>location.href='cargar-imagenes.php?id=".$producto_id."'</script>";
			}else{
				echo "<script>location.href='edit-producto.php?id=".$producto_id."'</script>";
			}
		}
	}

	exit;
?>