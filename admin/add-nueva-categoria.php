<?php
	error_reporting(0);
	header("Content-Type: text/html;charset=utf-8");
    mysql_query("SET NAMES 'utf8'");

	include("class/cnn.php");

	/* VARIABLES */
	$categoria_nombre = $_POST['categoria_nombre'];
	$categoria_linea  = $_POST['categoria_linea'];


	$rand = substr(sha1(md5(time())),2,4);
	$tamano = $_FILES["categoria_imagen"]['size'];
	$tipo = $_FILES["categoria_imagen"]['type'];
	$categoria_imagen = $rand.$_FILES["categoria_imagen"]['name'];

	if (isset($_FILES['categoria_imagen'])){
		//Comprobamos si el fichero es una imagen
		if ($_FILES['categoria_imagen']['type']=='image/png' || $_FILES['categoria_imagen']['type']=='image/jpeg'){		$rand = substr(sha1(md5(time())),2,4);
			$categoria_imagen = $rand.$_FILES["categoria_imagen"]["name"];
			//Subimos el fichero al servidor
			move_uploaded_file($_FILES["categoria_imagen"]["tmp_name"], "../images_admin/categorias/".$categoria_imagen);
			$validar=true;
		}
		else $validar=false;
	}

	$sqlUltimo = "SELECT MAX(`categoria_orden`) AS categoria_orden FROM `piedras_categorias`";
	$resultUltimo = mysql_query($sqlUltimo, $link);
	$filaUltimo = mysql_fetch_assoc($resultUltimo);
	$categoria_orden = $filaUltimo['categoria_orden']+1; 

	$sql = "INSERT INTO `piedras_categorias` (
	`categoria_id` ,
	`categoria_nombre`,
	`categoria_linea`,
	`categoria_imagen`,
	categoria_orden 
	)
	VALUES (
	NULL ,  '$categoria_nombre', '$categoria_linea', '$categoria_imagen', " . $categoria_orden ."
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