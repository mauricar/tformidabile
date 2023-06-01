<?php 

  include("admin/class/cnn.php");
  include("admin/class/funciones.php");

  if ( !isset($_GET['id']) ){

    header("Loaction: " . $base_url);

  }

  $cat_id = $_GET['id'];


  $sqlCategorias = "SELECT * FROM piedras_categorias WHERE categoria_id= " . $cat_id;

  $resultadoCategorias = mysql_query($sqlCategorias);      
  $filaCategoria = mysql_fetch_assoc($resultadoCategorias);

  $cat_id = $filaCategoria['categoria_id'];
  $cat_nombre = $filaCategoria['categoria_nombre'];

  


  $seccion = $filaCategoria['categoria_nombre'];

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include('path.php');?>
    <meta name="description" content="" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title><?php echo $cat_nombre;?> - Piedras Patagonia</title>


    <?php include '_inside_head.php'; ?>
    
  </head>
  <body>


    <?php include '_header.php'; ?>
    <?php include '_menu_productos.php'; ?>

    <div class="container">
      <ol class="breadcrumb">
        <li><a href="<?php echo $base_url;?>">Home</a></li>
        <li><a href="<?php echo $base_url;?>/productos">Productos</a></li>
        <li class="active"><?php echo $cat_nombre;?></li>
      </ol>
    </div>

    <div class="container">
      <h1 class="title-category"><?php echo $cat_nombre;?></h1>
    </div>


    <div class="container-productos">
      <div class="container">
        <div class="row">
          <?php

          $sqlSubCat = "SELECT * FROM piedras_subcategorias WHERE categoria_id=$cat_id ORDER BY subcategoria_orden ASC";

          $resultadoSubCat = mysql_query($sqlSubCat);
          $numero_filas = mysql_num_rows($resultadoSubCat);
          if ($numero_filas == 0) {

              $sqlProductos = "SELECT * FROM piedras_productos WHERE producto_categoria = " . $cat_id . " ORDER BY producto_orden ASC";
              $resultadoProductos = mysql_query($sqlProductos);

              while($filaProducto = mysql_fetch_assoc($resultadoProductos)){
                  $producto_id = $filaProducto['producto_id'];
                  $producto_nombre = $filaProducto['producto_nombre'];
                  $producto_subtitulo = $filaProducto['producto_subtitulo'];
                  $producto_categoria = $filaProducto['producto_categoria'];
                  $producto_imagen = $filaProducto['producto_imagen'];
                  
                  $sqlCategoriaPadre = "SELECT * FROM piedras_categorias WHERE categoria_id = " . $categoria_id;
                  $resultadoCategoriasPadre = mysql_query($sqlCategoriaPadre);      
                  while($filaCategoriaPadre = mysql_fetch_assoc($resultadoCategoriasPadre)){
                      $categoria_padre_nombre = $filaCategoriaPadre['categoria_nombre'];
                      $categoria_padre_linea = $filaCategoriaPadre['categoria_linea'];

                  }
              ?>

              <div class="col-xs-6 col-md-4 wraper-producto">
                <div class="box-producto">
                  <a href="<?php echo $base_url;?>/producto/<?php echo $producto_id;?>-<?php echo text2url($producto_nombre);?>"><img class="img-responsive" src="<?php echo $base_url;?>/images_admin/productos/<?php echo $producto_imagen;?>"></a>
                  <div class="bajada">
                    <h2><?php echo $producto_nombre;?></h2>
                    <p><?php echo truncate($producto_subtitulo, 90);?></p>
                    <a href="<?php echo $base_url;?>/producto/<?php echo $producto_id;?>-<?php echo text2url($producto_nombre);?>">+ info</a>
                  </div>
                </div>
              </div>
              <?php
              }
            }else{?>
              <?php
              $sqlCategorias = "SELECT * FROM piedras_subcategorias WHERE categoria_id = " . $cat_id ." ORDER BY subcategoria_orden ASC ";
              
              $resultadoCategorias = mysql_query($sqlCategorias);      


              while($filaCategoria = mysql_fetch_assoc($resultadoCategorias)){
                $subcategoria_id = $filaCategoria['subcategoria_id'];
                $subcategoria_nombre = $filaCategoria['subcategoria_nombre'];
                $subcategoria_imagen = $filaCategoria['subcategoria_imagen'];
                $link = $base_url . "/productos/subcategoria/" . $subcategoria_id ."-" . text2url($subcategoria_nombre);

               
                

              ?>
              <div class="col-xs-6 col-md-4 wraper-producto">
                <div class="box-producto">
                  <a href="<?php echo $link;?>""><img class="img-responsive" src="<?php echo $base_url;?>/images_admin/subcategorias/<?php echo $subcategoria_imagen;?>"></a>
                  <div class="bajada">
                    <h4><?php echo $subcategoria_nombre;?></h4>
                    <a href="<?php echo $link;?>">+ info</a>
                  </div>
                </div>
              </div>
              <?php
              }
              ?>

            <?php
            } ?>
              



        </div>
      </div>
    </div>



    

     <?php include '_footer.php'; ?>
     
  </body>
</html>