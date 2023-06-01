<?php
	//header("Content-Type: text/html;charset=utf-8");
    // mysql_query("SET NAMES 'utf8'");

	include("class/cnn.php");

	/* VARIABLES */
	$producto_id = $_POST['producto_id'];

	//Comprobamos si el fichero es una imagen
	if ($_FILES['producto_imagen']['type']=='image/png' || $_FILES['producto_imagen']['type']=='image/jpeg'){			
		$rand = substr(sha1(md5(time())),2,4);
		$archivo = $rand.$_FILES["producto_imagen"]["name"];
		//Subimos el fichero al servidor
		move_uploaded_file($_FILES["producto_imagen"]["tmp_name"], "../images_admin/productos/".$archivo);

		$sqlUltimoId = "SELECT MAX(  `img_order` ) AS ultimoId FROM piedras_imagenes WHERE  `producto_id` =$producto_id";
		$resultUltimoId = mysql_query($sqlUltimoId, $link);
		$filaUltimoId = mysql_fetch_assoc($resultUltimoId);
        $ultimoId = $filaUltimoId['ultimoId'];
        $ultimoId++;  

		$sqlImagen = "INSERT INTO `piedras_imagenes` (
			`imagenes_id` ,
			`imagenes_nombre` ,
			`producto_id` ,
			`imagenes_estado`,
			`img_order`
			)
			VALUES (
			NULL ,  '$archivo',  '$producto_id',  '0', $ultimoId
			);
		";

		$resultImagen = mysql_query($sqlImagen, $link);

		if($_POST['producto_action']=='carga'){
			echo "<script>location.href='cargar-imagenes.php?id=".$producto_id."'</script>";
		}else{
			echo "<script>location.href='edit-producto.php?id=".$producto_id."'</script>";
		}
	}


	exit;
?>