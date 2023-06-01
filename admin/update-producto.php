<?php
	error_reporting(0);
	header("Content-Type: text/html;charset=utf-8");
    mysql_query("SET NAMES 'utf8'");

	include("class/cnn.php");
?>
<div id="content">
	<pre>
<?php
	echo "<h3 class='loading' >ACTUALIZANDO... </h3>";

		/* VARIABLES */
	$producto_id = $_POST['producto_id'];
	$producto_nombre = $_POST['producto_nombre'];
	$producto_subtitulo = $_POST['producto_subtitulo'];
	$producto_descripcion = $_POST['producto_descripcion'];
	$producto_destacado = ($_POST['producto_destacado'] == "on") ? 1 : 0;
	$producto_categoria = $_POST['producto_categoria'][0];
	$producto_subcategoria = isset($_POST['producto_subcategoria']) ? $_POST['producto_subcategoria'][0]  : -1 ;
	$producto_imagen_hidden = $_POST['producto_imagen_hidden'];
	
	$producto_imagenes_eliminar = ($_POST['producto_imagenes_eliminar'] == "on") ? 1 : 0;

	if (!$_FILES["producto_imagen"]["name"]==""){
	  if ($_FILES['producto_imagen']['type']=='image/png' || $_FILES['producto_imagen']['type']=='image/jpeg'){   $rand = substr(sha1(md5(time())),2,4);
	    $producto_imagen = $rand.$_FILES["producto_imagen"]["name"];
	    move_uploaded_file($_FILES["producto_imagen"]["tmp_name"], "../images_admin/productos/".$producto_imagen);

	   
	  }
	}else{
	  $producto_imagen = $producto_imagen_hidden;
	}

	$sqlActualizarProducto = 'UPDATE piedras_productos SET 
	producto_nombre =  "' . $producto_nombre . '",
	producto_subtitulo =  "' .$producto_subtitulo. '",
	producto_descripcion =  "' .htmlentities($producto_descripcion). '",
	producto_destacado =  "' .$producto_destacado. '",
	producto_categoria =  ' .$producto_categoria. ',
	producto_imagen = "' .$producto_imagen. '",
	producto_subcategoria =  ' .$producto_subcategoria. '
	WHERE producto_id = ' .$producto_id;
	
	$resultadoActualizarProducto = mysql_query($sqlActualizarProducto);
	if (count($_FILES['producto_imagenes']['name']) > 0 ){
		if ($producto_imagenes_eliminar == 1){
			$sqlActualizarIMGProducto = "DELETE FROM 'piedras_imagenes' WHERE 'producto_id' = $producto_id";

			$resultadoActualizarIMGProducto = mysql_query($sqlActualizarIMGProducto);
		}
		$total = count($_FILES['producto_imagenes']['name']);

			
		// Loop through each file
		for( $i=0 ; $i < $total ; $i++ ) {
			if ($_FILES['producto_imagenes']['type'][$i]=='image/png' || $_FILES['producto_imagenes']['type'][$i]=='image/jpeg'){			$rand = substr(sha1(md5(time())),2,4);
				$archivo = $rand.$_FILES["producto_imagenes"]["name"][$i];
				//Subimos el fichero al servidor
				move_uploaded_file($_FILES["producto_imagenes"]["tmp_name"][$i], "../images_admin/productos/".$archivo);

				$sqlImagen = "INSERT INTO piedras_imagenes (
				imagenes_id ,
				imagenes_nombre ,
				producto_id
				)
				VALUES (
				NULL ,  '$archivo',  '$producto_id'
				);";
				
				$resultImagen = mysql_query($sqlImagen, $link);
				
			}
		}

	}


	      
	echo "<meta http-equiv='refresh' content='0;url=listado-de-productos.php'>";

?>
</pre>
</div>