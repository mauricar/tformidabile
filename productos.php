<?php 

  include("admin/class/cnn.php");
  include("admin/class/funciones.php");

  $seccion="productos";
?>
<!DOCTYPE html>
<html lang="es">
  <head>

    <meta name="description" content="" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Productos - Piedras Patagonia</title>


    <?php include '_inside_head.php'; ?>
    
  </head>
  <body>


    <?php include '_header.php'; ?>
    <?php include '_menu_productos.php'; ?>



    <div class="container">
      <ol class="breadcrumb">
        <li><a href="<?php echo $base_url;?>">Home</a></li>
        <li class="active">Productos</li>
      </ol>
    </div>

    <div class="container">
      <h1 class="title-category">Productos</h1>
    </div>
  

    <div class="container-productos">
      <div class="container">
        <div class="row">

          <?php
          $sqlCategorias = "SELECT * FROM piedras_categorias ORDER BY categoria_orden ASC ";
          $resultadoCategorias = mysql_query($sqlCategorias);      


          while($filaCategoria = mysql_fetch_assoc($resultadoCategorias)){
            $categoria_id = $filaCategoria['categoria_id'];
            $categoria_nombre = $filaCategoria['categoria_nombre'];
            $categoria_imagen = $filaCategoria['categoria_imagen'];


            $sqlSubCat = "SELECT * FROM piedras_subcategorias WHERE categoria_id=$categoria_id ORDER BY subcategoria_orden ASC";

            $resultadoSubCat = mysql_query($sqlSubCat);
            $numero_filas = mysql_num_rows($resultadoSubCat);
            if ($numero_filas > 0) {
              $link = $base_url . "/productos/subcategoria/" . $categoria_id ."-" . text2url($categoria_nombre);;
            }
            else{
              $link = $base_url . "/productos/categoria/" . $categoria_id ."-" . text2url($categoria_nombre);
            }

          ?>
          <div class="col-xs-6 col-md-4 wraper-producto">
            <div class="box-producto">
              <a href="<?php echo $link;?>""><img class="img-responsive" src="<?php echo $base_url;?>/images_admin/categorias/<?php echo $categoria_imagen;?>"></a>
              <div class="bajada">
                <h4><?php echo $categoria_nombre;?></h4>
                <a href="<?php echo $link;?>">+ info</a>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
          <div class="col-xs-6 col-md-4 wraper-producto">
            <div class="box-producto">
              <a href="http://oscarrevestimientos.com.ar/" target="_blanK"><img class="img-responsive" src="images/productos/portada-marmoleria.jpg"></a>
              <div class="bajada">
                <h4>Marmoleria</h4>
                <a href="http://oscarrevestimientos.com.ar/" target="_blanK">+ info</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>



    

     <?php include '_footer.php'; ?>
     
  </body>
</html>