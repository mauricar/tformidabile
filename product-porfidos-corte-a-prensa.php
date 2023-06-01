<!DOCTYPE html>
<html lang="es">
  <head>

    <meta name="description" content="" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Corte a Prensa</title>


    <?php include '_inside_head.php'; ?>
    
  </head>
  <body>


    <?php include '_header.php'; ?>
    <?php include '_menu_productos.php'; ?>


    <div class="container">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Productos</a></li>
        <li><a href="#">Pórfidos</a></li>
        <li class="active">Corte a Prensa</li>
      </ol>
    </div>



    <div class="container-productos">
      <div class="container">


        <div class="row">


        <!-- SLIDER Foto producto -->
          <div class="col-md-7 foto-producto"> 
            <div class="text-center visible-xs visible-sm">
              <!-- Slider main container -->
              <div class="swiper-container swiper-product">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                      <!-- Slides -->
                      <div class="swiper-slide"><img class="img-responsive" src="images/productos/porfidos/porfido-prensa.jpg"></div>
                      <div class="swiper-slide"><img class="img-responsive" src="images/productos/foto-producto-2.jpg"></div>

                  </div>
                  <!-- If we need pagination -->
                  <!-- <div class="swiper-pagination"></div> -->
               
                  <!-- If we need navigation buttons -->
                  <div class="swiper-button-prev home-prev"></div>
                  <div class="swiper-button-next home-next"></div>
               
                  <!-- If we need scrollbar -->
                  <!--  <div class="swiper-scrollbar"></div> -->
              </div>
            </div>
          </div> <!-- / SLIDER Foto producto -->



          <div class="col-md-7 foto-producto hidden-xs hidden-sm"> 
            <img class="img-responsive" src="images/productos/porfidos/porfido-prensa.jpg">
            <img class="img-responsive" src="images/productos/foto-producto-2.jpg">
          </div>


          <div class="col-md-5 ">
            <div class="descripcion-producto">
              <p class="text-category"><a href="category-porfidos.php">Pórfidos</a></p>
              <h1>Corte a Prensa</h1>
              <p class="descripcion">Nullam id volutpat dolor. Aenean in sem est. Maecenas tempus mauris sit amet neque pharetra placerat. Sed facilisis leo metus, quis luctus tuid volutpat dolor nean in sem est. Maecenas tincidunt.</p>
              <p class="descripcion">Aenean in sem est. Maecenas tempus mauris sit amet neque pharetra placerat. Sed facilisis leo metus, quis luctus tuid.</p>
              <!--
              <h5>¿Querés consultar por este producto?</h5>
               <a class="btn-ppal" href="contacto.php">Escribinos</a>
               -->
            </div>



        </div>
      </div>
    </div>



    

     <?php include '_footer.php'; ?>
     
  </body>
</html>