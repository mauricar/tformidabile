<?php
	error_reporting(0);
	header("Content-Type: text/html;charset=utf-8");
    mysql_query("SET NAMES 'utf8'");

	include("class/cnn.php");

	/* VARIABLES */
	$producto_nombre = $_POST['producto_nombre'];
	$producto_subtitulo = $_POST['producto_subtitulo'];
	$producto_descripcion = $_POST['producto_descripcion'];
	$producto_destacado = ($_POST['producto_destacado'] == "on") ? 1 : 0;
	$producto_categoria = $_POST['producto_categoria'][0];
	$producto_subcategoria = isset($_POST['producto_subcategoria']) ? $_POST['producto_subcategoria'][0]  : -1 ;
	
	
	
	$rand = substr(sha1(md5(time())),2,4);
	$tamano = $_FILES["producto_imagen"]['size'];
	$tipo = $_FILES["producto_imagen"]['type'];
	$archivo = $rand.$_FILES["producto_imagen"]['name'];

	if (isset($_FILES['producto_imagen'])){
		
		if ($_FILES['producto_imagen']['type']=='image/png' || $_FILES['producto_imagen']['type']=='image/jpeg'){			$rand = substr(sha1(md5(time())),2,4);
				$archivo = $rand.$_FILES["producto_imagen"]["name"];
			//Subimos el fichero al servidor
			move_uploaded_file($_FILES["producto_imagen"]["tmp_name"], "../images_admin/productos/".$archivo);

		}
	}


	$producto_imagen  = $archivo;

	$sqlUltimoproducto = "SELECT MAX(`producto_orden`) AS producto_orden FROM `piedras_productos`";
	$resultUltimoproducto = mysql_query($sqlUltimoproducto, $link);
	$filaUltimoproducto = mysql_fetch_assoc($resultUltimoproducto);
	$producto_orden = $filaUltimoproducto['producto_orden']+1; 

	$sql = "INSERT INTO `piedras_productos` (
	`producto_id` ,
	`producto_nombre` ,
	`producto_subtitulo` ,
	`producto_descripcion` ,
	`producto_destacado` ,
	`producto_imagen` ,
	`producto_categoria` ,
	`producto_subcategoria` ,
	`producto_estado`
	)
	VALUES (
	NULL ,  '$producto_nombre', '$producto_subtitulo','$producto_descripcion', $producto_destacado, '$producto_imagen', $producto_categoria,  $producto_subcategoria,  '1');";
	$result = mysql_query($sql, $link);
	
	$producto_id = mysql_insert_id($link);



	if (isset($_FILES['producto_imagenes'])){
		$total = count($_FILES['producto_imagenes']['name']);
		// Loop through each file
		for( $i=0 ; $i < $total ; $i++ ) {
			if ($_FILES['producto_imagenes']['type'][$i]=='image/png' || $_FILES['producto_imagenes']['type'][$i]=='image/jpeg'){			$rand = substr(sha1(md5(time())),2,4);
				$archivo = $rand.$_FILES["producto_imagenes"]["name"][$i];
				//Subimos el fichero al servidor
				move_uploaded_file($_FILES["producto_imagenes"]["tmp_name"][$i], "../images_admin/productos/".$archivo);

				$sqlImagen = "INSERT INTO `piedras_imagenes` (
				`imagenes_id` ,
				`imagenes_nombre` ,
				`producto_id`
				)
				VALUES (
				NULL ,  '$archivo',  '$producto_id'
				);";

				$resultImagen = mysql_query($sqlImagen, $link);
				
			}
		}

	}


	if (!$result) {
	    die('Error: ' . mysql_error());
	}else{
		echo "<script>location.href='listado-de-productos.php';</script>";
	}

	exit;
?>