<!DOCTYPE html>
<html lang="es">
  <head>

    <meta name="description" content="" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Productos</title>


    <?php include '_inside_head.php'; ?>
    
  </head>
  <body>


    <?php include '_header.php'; ?>
    <?php include '_menu_productos.php'; ?>



    <div class="container">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Productos</li>
      </ol>
    </div>

    <div class="container">
      <h1 class="title-category">Productos</h1>
    </div>
  

    <div class="container-productos">
      <div class="container">
        <div class="row">

          <div class="col-xs-6 col-md-4 wraper-producto">
            <div class="box-producto">
              <a href="category-porfidos.php"><img class="img-responsive" src="images/productos/portada-profidos.jpg"></a>
              <div class="bajada">
                <h4>Pórfidos</h4>
                <a href="category-porfidos.php">+ info</a>
              </div>
            </div>
          </div>

          <div class="col-xs-6 col-md-4 wraper-producto">
            <div class="box-producto">
              <a href="subcategory-muretes.php"><img class="img-responsive" src="images/productos/portada-muretes.jpg"></a>
              <div class="bajada">
                <h4>Muretes</h4>
                <a href="subcategory.muretes.php">+ info</a>
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
          </div>


        </div>
      </div>
    </div>



    

     <?php include '_footer.php'; ?>
     
  </body>
</html>