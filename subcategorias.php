<?php 

  include("admin/class/cnn.php");
  include("admin/class/funciones.php");

  if ( !isset($_GET['id']) ){

    header("Loaction: " . $base_url);

  }

  $cat_id = $_GET['id'];


  $sqlCategorias = "SELECT * FROM piedras_subcategorias WHERE subcategoria_id= " . $cat_id;

  $resultadoCategorias = mysql_query($sqlCategorias);      
  $filaCategoria = mysql_fetch_assoc($resultadoCategorias);

  $subcat_id = $filaCategoria['subcategoria_id'];
  $subcat_nombre = $filaCategoria['subcategoria_nombre'];

  
  $catPadre = get_entidad("piedras_categorias", "categoria_id", $filaCategoria['categoria_id']);

  $seccion = $catPadre['categoria_nombre'];
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
    
    <title><?php echo $subcat_nombre;?> - Piedras Patagonia</title>


    <?php include '_inside_head.php'; ?>
    
  </head>
  <body>


    <?php include '_header.php'; ?>
    <?php include '_menu_productos.php'; ?>



    <div class="container">
     
       <ol class="breadcrumb">
        <li><a href="<?php echo $base_url;?>">Home</a></li>
        <li><a href="<?php echo $base_url;?>/productos">Productos</a></li>
        <li><a href="<?php echo $base_url;?>/productos/categoria/<?php echo $catPadre['categoria_id'];?>-<?php echo text2url($catPadre['categoria_nombre']);?>"><?php echo $catPadre['categoria_nombre'];?></a></li>
        <li class="active"><?php echo $subcat_nombre;?></li>
      </ol>
    </div>

    <div class="container">
      <h1 class="title-category"><?php echo $catPadre['categoria_nombre'];?></h1>
    </div>
  

    <div class="container-productos">
      <div class="container">
        <div class="row">

          <?php
          $sqlProductos = "SELECT * FROM piedras_productos WHERE producto_subcategoria = " . $subcat_id . " ORDER BY producto_orden ASC";
              $resultadoProductos = mysql_query($sqlProductos);

              while($filaProducto = mysql_fetch_assoc($resultadoProductos)){
                  $producto_id = $filaProducto['producto_id'];
                  $producto_nombre = $filaProducto['producto_nombre'];
                  $producto_subtitulo = $filaProducto['producto_subtitulo'];
                  $producto_subcategoria = $filaProducto['producto_subcategoria'];
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
              ?>


        </div>
      </div>
    </div>



    

     <?php include '_footer.php'; ?>
     
  </body>
</html>