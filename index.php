<?php 

  include("admin/class/cnn.php");
  include("admin/class/funciones.php");

?>
<!DOCTYPE html>
<html lang="es">
  <head>

    <meta name="description" content="" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Piedras Patagonia</title>


    <?php include '_inside_head.php'; ?>
    
  </head>
  <body>


    <?php include '_header.php'; ?>
    <?php include '_menu_productos.php'; ?>



    <!-- Slider main container -->
    <div class="swiper-container swiper-home">
        <div class="btn-swiper hidden-xs hidden-sm">
              <a  href="<?php echo $base_url;?>/contacto">¡Contactanos!</a>
            </div>
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            
            <?php
              $sqlSlider = "SELECT * FROM piedras_slider WHERE slider_estado=1 ORDER BY slider_id ASC ";
              $resultadoSlider = mysql_query($sqlSlider);      

              
              while($filaSlide = mysql_fetch_assoc($resultadoSlider)){
                $slider_id = $filaSlide['slider_id'];
                $slider_titulo = $filaSlide['slider_titulo'];
                $slider_subtitulo = $filaSlide['slider_subtitulo'];
                $slider_imagen = $filaSlide['slider_imagen'];
                $slider_link = $filaSlide['slider_link'];
                

            ?>
            <!-- Slides -->
            <div class="swiper-slide center-block"><a href="<?php echo $slider_link;?>"><img class="img-responsive" alt="<?php echo $filaSlide['slider_titulo'];  ?>" src="<?php echo $base_url;?>/images_admin/slider/<?php echo $slider_imagen;?>"></a>
              <!--
              <h1><?php echo $slider_titulo;?></h1>
              <p><?php echo $slider_subtitulo;?></p>
              -->
            </div>

            <?php }?>
            
        </div>
        <!-- If we need pagination -->
        <!-- <div class="swiper-pagination"></div> -->
     
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev home-prev hidden-xs hidden-sm"></div>
        <div class="swiper-button-next home-next hidden-xs hidden-sm"></div>
     
        <!-- If we need scrollbar -->
        <!--  <div class="swiper-scrollbar"></div> -->
    </div>

    <h2 class="text-center ">Nuestros Productos</h2>
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
          ?>
          <div class="col-xs-6 col-md-4 wraper-producto">
            <div class="box-producto">
              <a href="<?php echo $base_url;?>/productos/categoria/<?php echo $categoria_id;?>-<?php echo text2url($categoria_nombre);?>"><img class="img-responsive" src="<?php echo $base_url;?>/images_admin/categorias/<?php echo $categoria_imagen;?>"></a>
              <div class="bajada">
                <h4><?php echo $categoria_nombre;?></h4>
                <a href="<?php echo $base_url;?>/productos/categoria/<?php echo $categoria_id;?>-<?php echo text2url($categoria_nombre);?>">+ info</a>
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
          <!--<div class="col-xs-6 col-md-4 wraper-producto">
            <div class="box-producto">
              <a href="#"><img class="img-responsive" src="images/productos/portada-muretes.jpg"></a>
              <div class="bajada">
                <h4>Muretes</h4>
                <a href="#">+ info</a>
              </div>
            </div>
          </div>

          <div class="col-xs-6 col-md-4 wraper-producto">
            <div class="box-producto">
              <a href="#"><img class="img-responsive" src="images/productos/portada-piedras-lajas.jpg"></a>
              <div class="bajada">
                <h4>Piedras Lajas</h4>
                <a href="#">+ info</a>
              </div>
            </div>
          </div>

          <div class="col-xs-6 col-md-4 wraper-producto">
            <div class="box-producto">
              <a href="#"><img class="img-responsive" src="images/productos/portada-placas-encastrables.jpg"></a>
              <div class="bajada">
                <h4>Placas Encastrables</h4>
                <a href="#">+ info</a>
              </div>
            </div>
          </div>

          <div class="col-xs-6 col-md-4 wraper-producto">
            <div class="box-producto">
              <a href="#"><img class="img-responsive" src="images/productos/portada-piedras-jardin.jpg"></a>
              <div class="bajada">
                <h4>Piedras de Jardín</h4>
                <a href="#">+ info</a>
              </div>
            </div>
          </div>

          <div class="col-xs-6 col-md-4 wraper-producto">
            <div class="box-producto">
              <a href="http://oscarrevestimientos.com.ar/" target="_blanK"><img class="img-responsive" src="images/productos/portada-marmoleria.jpg"></a>
              <div class="bajada">
                <h4>Marmoleria</h4>
                <a href="http://oscarrevestimientos.com.ar/" target="_blanK">+ info</a>
              </div>
            </div>
          </div>-->


        </div>
      </div>
    </div>



    

     <?php include '_footer.php'; ?>
     
  </body>
</html>