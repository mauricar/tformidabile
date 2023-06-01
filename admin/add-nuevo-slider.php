<?php
	error_reporting(0);
	header("Content-Type: text/html;charset=utf-8");
    mysql_query("SET NAMES 'utf8'");

	include("class/cnn.php");

	/* VARIABLES */
	$slider_titulo = $_POST['slider_titulo'];
	$slider_subtitulo = $_POST['slider_subtitulo'];
	$slider_link = $_POST['slider_link'];

	//if (isset($_POST['slider_online'])) {
		$slider_online = "Publicado";
	//}else{
	//	$slider_online = "No Publicado";
	//}

	$rand = substr(sha1(md5(time())),2,4);
	$tamano = $_FILES["slider_imagen"]['size'];
	$tipo = $_FILES["slider_imagen"]['type'];
	$slider_imagen = $rand.$_FILES["slider_imagen"]['name'];

	if (isset($_FILES['slider_imagen'])){
		//Comprobamos si el fichero es una imagen
		if ($_FILES['slider_imagen']['type']=='image/png' || $_FILES['slider_imagen']['type']=='image/jpeg'){		$rand = substr(sha1(md5(time())),2,4);
			$slider_imagen = $rand.$_FILES["slider_imagen"]["name"];
			//Subimos el fichero al servidor
			move_uploaded_file($_FILES["slider_imagen"]["tmp_name"], "../images_admin/slider/".$slider_imagen);
			$validar=true;
		}
		else $validar=false;
	}

	$sql = "INSERT INTO `piedras_slider` (
	`slider_id` ,
	`slider_titulo` ,
	`slider_subtitulo` ,
	`slider_link` ,
	`slider_imagen` ,
	`slider_online` ,
	`slider_estado`
	)
	VALUES (
	NULL , '$slider_titulo', '$slider_subtitulo', '$slider_link',  '$slider_imagen', '$slider_online',  '1'
	);";

	$result = mysql_query($sql, $link);
	
	if (!$result) {
	    die('Error: ' . mysql_error());
	}else{
		echo "<script>location.href='listado-de-slides.php'</script>";
	}

	exit;
?>