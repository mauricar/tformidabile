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
        <li><a href="#">Productos</a></li>
        <li class="active">Muretes</li>
      </ol>
    </div>


    <div class="container">
      <h1 class="title-category">Muretes</h1>
    </div>
  

    <div class="container-productos">
      <div class="container">
        <div class="row">

          <div class="col-xs-6 col-md-4 wraper-producto">
            <div class="box-producto">
              <a href="subcategory-muretes-1.php"><img class="img-responsive" src="images/productos/foto.jpg"></a>
              <div class="bajada">
                <h4>Murete 1 (subcat)</h4>
                <a href="subcategory-muretes-1.php">+ info</a>
              </div>
            </div>
          </div>

          <div class="col-xs-6 col-md-4 wraper-producto">
            <div class="box-producto">
              <a href="#"><img class="img-responsive" src="images/productos/foto.jpg"></a>
              <div class="bajada">
                <h4>Murete 2 (subcat)</h4>
                <a href="#">+ info</a>
              </div>
            </div>
          </div>

          <div class="col-xs-6 col-md-4 wraper-producto">
            <div class="box-producto">
              <a href="#"><img class="img-responsive" src="images/productos/foto.jpg"></a>
              <div class="bajada">
                <h4>Murete 3 (subcat)</h4>
                <a href="#">+ info</a>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>



    

     <?php include '_footer.php'; ?>
     
  </body>
</html>