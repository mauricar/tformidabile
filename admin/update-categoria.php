<?php
	error_reporting(0);
	header("Content-Type: text/html;charset=utf-8");
    mysql_query("SET NAMES 'utf8'");

	include("class/cnn.php");

	echo "<h3 class='loading' >ACTUALIZANDO CATEGORIA... </h3>";

	/* VARIABLES */
	$categoria_id = $_POST['categoria_id'];
	$categoria_nombre = $_POST['categoria_nombre'];
	$categoria_linea  = $_POST['categoria_linea'];
	$categoria_imagen_hidden = $_POST['categoria_imagen_hidden'];

	if (!$_FILES["categoria_imagen"]["name"]==""){
	  if ($_FILES['categoria_imagen']['type']=='image/png' || $_FILES['categoria_imagen']['type']=='image/jpeg'){   $rand = substr(sha1(md5(time())),2,4);
	    $categoria_imagen_final = $rand.$_FILES["categoria_imagen"]["name"];
	    move_uploaded_file($_FILES["categoria_imagen"]["tmp_name"], "../images_admin/categorias/".$categoria_imagen_final);
	  }
	  // echo "Image1: ".$categoria_imagen_final;
	}else{
	  $categoria_imagen_final = $categoria_imagen_hidden;
	  // echo "Image2: ".$categoria_imagen_final;
	}


	$sqlCategoria = "UPDATE `piedras_categorias` SET  
	`categoria_nombre` =  '$categoria_nombre',
	`categoria_linea` =  '$categoria_linea',
	`categoria_imagen` =  '$categoria_imagen_final'

	WHERE `categoria_id` = $categoria_id";

	$resultadoActualizarCategoria = mysql_query($sqlCategoria);
	      
	echo "<meta http-equiv='refresh' content='0;url=listado-de-categorias.php'>";

?>