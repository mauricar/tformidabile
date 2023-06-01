<?php
	error_reporting(0);
	header("Content-Type: text/html;charset=utf-8");
    mysql_query("SET NAMES 'utf8'");

	include("class/cnn.php");

	echo "<h3 class='loading' >ACTUALIZANDO SUBCATEGORIA... </h3>";

	/* VARIABLES */
	$subcategoria_id = $_POST['subcategoria_id'];
	$subcategoria_nombre = $_POST['subcategoria_nombre'];
	$categoria_id  = $_POST['categoria_id'];
	$subcategoria_imagen_hidden = $_POST['subcategoria_imagen_hidden'];

	if (!$_FILES["subcategoria_imagen"]["name"]==""){
	  if ($_FILES['subcategoria_imagen']['type']=='image/png' || $_FILES['subcategoria_imagen']['type']=='image/jpeg'){   $rand = substr(sha1(md5(time())),2,4);
	    $subcategoria_imagen_final = $rand.$_FILES["subcategoria_imagen"]["name"];
	    move_uploaded_file($_FILES["subcategoria_imagen"]["tmp_name"], "../images_admin/subcategorias/".$categoria_imagen_final);
	  }
	  // echo "Image1: ".$categoria_imagen_final;
	}else{
	  $subcategoria_imagen_final = $subcategoria_imagen_hidden;
	  // echo "Image2: ".$categoria_imagen_final;
	}


	$sqlCategoria = "UPDATE `piedras_subcategorias` SET  
	`subcategoria_nombre` =  '$subcategoria_nombre',
	`categoria_id` =  '$categoria_id',
	`subcategoria_imagen` =  '$subcategoria_imagen_final'

	WHERE `subcategoria_id` = $subcategoria_id";

	$resultadoActualizarCategoria = mysql_query($sqlCategoria);
	      
	echo "<meta http-equiv='refresh' content='0;url=listado-de-subcategorias.php'>";
	
?>