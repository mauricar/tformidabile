<?php
	error_reporting(0);
	header("Content-Type: text/html;charset=utf-8");
    mysql_query("SET NAMES 'utf8'");

	include("class/cnn.php");

	/* VARIABLES */
	$subcategoria_nombre = $_POST['subcategoria_nombre'];
	$categoria_id = $_POST['categoria_id'];


	$rand = substr(sha1(md5(time())),2,4);
	$tamano = $_FILES["subcategoria_imagen"]['size'];
	$tipo = $_FILES["subcategoria_imagen"]['type'];
	$subcategoria_imagen = $rand.$_FILES["subcategoria_imagen"]['name'];

	if (isset($_FILES['subcategoria_imagen'])){
		//Comprobamos si el fichero es una imagen
		if ($_FILES['subcategoria_imagen']['type']=='image/png' || $_FILES['subcategoria_imagen']['type']=='image/jpeg'){		$rand = substr(sha1(md5(time())),2,4);
			$subcategoria_imagen = $rand.$_FILES["subcategoria_imagen"]["name"];
			//Subimos el fichero al servidor
			move_uploaded_file($_FILES["subcategoria_imagen"]["tmp_name"], "../images_admin/subcategorias/".$subcategoria_imagen);
			$validar=true;
		}
		else $validar=false;
	}

	$sqlUltimo = "SELECT MAX(`subcategoria_orden`) AS subcategoria_orden FROM `piedras_subcategorias`";
	$resultUltimo = mysql_query($sqlUltimo, $link);
	$filaUltimo = mysql_fetch_assoc($resultUltimo);
	$subcategoria_orden = $filaUltimo['subcategoria_orden']+1; 

	$sql = "INSERT INTO `piedras_subcategorias` (
	`subcategoria_id` ,
	`subcategoria_nombre` ,
	`categoria_id`,
	`subcategoria_imagen`,
	subcategoria_orden
	)
	VALUES (
	NULL ,  '$subcategoria_nombre' ,  '$categoria_id', '$subcategoria_imagen', ". $subcategoria_orden ."
	);";

	$result = mysql_query($sql, $link);

	if (!$result) {
	    die('Error: ' . mysql_error());
	}else{
		echo "<script>location.href='listado-de-subcategorias.php'</script>";
	}

	// header('Location: index.php?error=0&aviso=5');
	exit;
?>