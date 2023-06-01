<?php
	error_reporting(0);
	header("Content-Type: text/html;charset=utf-8");
    mysql_query("SET NAMES 'utf8'");

	include("class/cnn.php");

	echo "<h3 class='loading' >ACTUALIZANDO... </h3>";

	/* VARIABLES */
	$slider_id = $_POST['slider_id'];
	$slider_titulo = $_POST['slider_titulo'];
	$slider_subtitulo = $_POST['slider_subtitulo'];
	$slider_link = $_POST['slider_link'];
	$slider_imagen = $_POST['slider_imagen'];
	$slider_online = $_POST['slider_online'];
	$slider_imagen_hidden = $_POST['slider_imagen_hidden'];
	$slider_imagen_final = "";

	if (isset($_POST['slider_online'])) {
		$slider_online = "Publicado";
	}else{
		$slider_online = "No Publicado";
	}

	if (!$_FILES["slider_imagen"]["name"]==""){
	  if ($_FILES['slider_imagen']['type']=='image/png' || $_FILES['slider_imagen']['type']=='image/jpeg'){   $rand = substr(sha1(md5(time())),2,4);
	    $slider_imagen_final = $rand.$_FILES["slider_imagen"]["name"];
	    move_uploaded_file($_FILES["slider_imagen"]["tmp_name"], "../images_admin/slider/".$slider_imagen_final);
	  }
	  // echo "Image1: ".$slider_imagen_final;
	}else{
	  $slider_imagen_final = $slider_imagen_hidden;
	  // echo "Image2: ".$slider_imagen_final;
	}

	// echo "Image3: ".$slider_imagen_final;

	$sqlActualizarSlider = "UPDATE `piedras_slider` SET  
	`slider_titulo` =  '$slider_titulo',
	`slider_subtitulo` =  '$slider_subtitulo',
	`slider_imagen` =  '$slider_imagen_final',
	`slider_online` =  '$slider_online',
	`slider_link` =  '$slider_link',
	`slider_estado` =  '1'
	WHERE `slider_id` = $slider_id";

	$resultadoActualizarSlider = mysql_query($sqlActualizarSlider);
	      
	echo "<meta http-equiv='refresh' content='0;url=listado-de-slides.php'>";

?>