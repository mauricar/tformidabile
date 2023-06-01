<?php 

  include("admin/class/cnn.php");
  include("admin/class/funciones.php");

  if ( !isset($_GET['id']) ){

    header("Loaction: " . $base_url);

  }


  $producto = get_entidad("piedras_productos", "producto_id", $_GET['id']);
  $catPadre = get_entidad("piedras_categorias", "categoria_id", $producto['producto_categoria']);

   $seccion = $catPadre['categoria_nombre'];


   $producto_imagen = $producto['producto_imagen'];
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
    
    <title><?php echo $producto['producto_nombre'];?> - Piedras Patagonia</title>


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
        <?php  if (isset($producto['producto_subcategoria']) && $producto['producto_subcategoria']!= "-1"){

            $subCat = get_entidad("piedras_subcategorias", "subcategoria_id", $producto['producto_subcategoria']);
        ?>
          <li><a href="<?php echo $base_url;?>/productos/subcategoria/<?php echo $subCat['subcategoria_id'];?>-<?php echo text2url($subCat['subcategoria_nombre']);?>"><?php echo $subCat['subcategoria_nombre'];?></a></li>

        <?php }?>
        <li class="active"><?php echo $producto['producto_nombre'];?></li>
      </ol>
    </div>



    <div class="container-productos">
      <div class="container">


        <div class="row">


        <!-- SLIDER Foto producto -->
          <div class="col-md-7 foto-producto"> 
            <div class="text-center">
              <!-- Slider main container -->
              <div class="swiper-container swiper-product">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                      <div class="swiper-slide" ><img class="img-responsive" alt="<?php echo $producto['producto_nombre'];?>" src="<?php echo $base_url;?>/images_admin/productos/<?php echo $producto_imagen;?>"></div>
                      
                      <!-- Slides -->
                      <?php 
                      $producto_imagenes = get_listado("piedras_imagenes", "producto_id", $_GET['id'], "img_order");
                    
                      if ( count ($producto_imagenes) > 0 ){
                        foreach ($producto_imagenes as $img) {
                          
                      ?>  
                      <div class="swiper-slide"><img class="img-responsive" alt="<?php echo $producto['producto_nombre'];?>" src="<?php echo $base_url;?>/images_admin/productos/<?php echo $img['imagenes_nombre'];?>"></div>
                     
                      <?php
                          }
                        }
                      ?>
                  </div>
                  <!-- If we need pagination -->
                  <!-- <div class="swiper-pagination"></div> -->
               
                  <!-- If we need navigation buttons -->
                  <div class="swiper-button-prev home-prev"></div>
                  <div class="swiper-button-next home-next"></div>
               
                  <!-- If we need scrollbar -->
                  <!--  <div class="swiper-scrollbar"></div> -->
              </div>

              <div class="swiper-container swiper-thumbs">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">

                     <div class="swiper-slide thumb" data-slideindex="0"><img class="img-responsive" alt="<?php echo $producto['producto_nombre'];?>" src="<?php echo $base_url;?>/images_admin/productos/<?php echo $producto_imagen;?>"></div>
                      <!-- Slides -->
                      <?php 
                      $producto_imagenes = get_listado("piedras_imagenes", "producto_id", $_GET['id'] , "img_order");
                    
                      if ( count ($producto_imagenes) > 0 ){
                        $cont = 0;
                        foreach ($producto_imagenes as $img) {
                          
                      ?>  
                      <div class="swiper-slide thumb" data-slideindex="<?php echo $cont+1;?>">
                        <img class="img-responsive" alt="<?php echo $producto['producto_nombre'];?>" src="<?php echo $base_url;?>/images_admin/productos/<?php echo $img['imagenes_nombre'];?>">
                      </div>
                     
                      <?php
                          $cont++;
                          }
                        }
                      ?>
                  </div>
               
              </div>
            </div>
          </div> <!-- / SLIDER Foto producto -->



          <!--<div class="col-md-7 foto-producto hidden-xs hidden-sm"> 
            <img class="img-responsive" alt="<?php echo $producto['producto_nombre'];?>"  src="<?php echo $base_url;?>/images_admin/productos/<?php echo $producto['producto_imagen'];?>">
            <?php 
              $producto_imagenes = get_listado("piedras_imagenes", "producto_id", $_GET['id']);
            
              if ( count ($producto_imagenes) > 0 ){
                foreach ($producto_imagenes as $img) {
                  
              ?>  

                <img class="img-responsive" alt="<?php echo $producto['producto_nombre'];?>" src="<?php echo $base_url;?>/images_admin/productos/<?php echo $img['imagenes_nombre'];?>">

              <?php
                }
              }
            ?>
            
          </div>-->


          <div class="col-md-5 ">
            <div class="descripcion-producto">
              <?php if (isset($producto['producto_subcategoria']) && $producto['producto_subcategoria']!= ""){?>
                <p class="text-category"><a href="<?php echo $base_url;?>/productos/subcategoria/<?php echo $subCat['subcategoria_id'];?>-<?php echo text2url($subCat['subcategoria_nombre']);?>"><?php echo $subCat['subcategoria_nombre'];?></a></p>
              <?php }else{?>
                 <p class="text-category"><a href="<?php echo $base_url;?>/productos/categoria/<?php echo $catPadre['categoria_id'];?>-<?php echo text2url($catPadre['categoria_nombre']);?>"><?php echo $catPadre['categoria_nombre'];?></a></p>

              <?php }?>
              <h1><?php echo $producto['producto_nombre'];?></h1>
              <div class="descripcion"><?php echo html_entity_decode($producto['producto_descripcion']);?></div>
              <!--
              <h5>¿Querés consultar por este producto?</h5>
               <a class="btn-ppal" href="contacto.php">Escribinos</a>
               -->
            </div>



        </div>
      </div>
    </div>



    

     <?php include '_footer.php'; ?>

  <script type="text/javascript">   
    $(document).ready(function () {

      
         var mySwiperThumbs = new Swiper ('.swiper-thumbs', {
            spaceBetween: 10,
            slidesPerView: 4,
            loop: false,
            freeMode: true,
            loopedSlides: 5, //looped slides should be the same
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
          });


        var mySwiper = new Swiper ('.swiper-product', {
          loop: true,
              speed: 600,  
              direction: 'horizontal',

            // Navigation arrows
            navigation: {
                 nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
                },
            thumbs: {
              swiper: mySwiperThumbs,
            },

        });


        jQuery('.swiper-slide.thumb').click(function () {
          index = jQuery(this).data('slideindex')

          mySwiper.slideTo(index+1);
        } );


    });     
  </script>

  </body>
</html>