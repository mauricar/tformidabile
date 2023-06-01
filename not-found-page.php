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
    <meta name="robots" content="noindex">
    
    <title>Error 404 - Página no encontrada</title>


    <?php include '_inside_head.php'; ?>
    
  </head>
  <body>


    <?php include '_header.php'; ?>
    <?php include '_menu_productos.php'; ?>


    <div class="container">
      <ol class="breadcrumb">
        <li><a href="<?php echo $base_url;?>">Home</a></li>
        <li class="active">Error 404</li>
      </ol>
    </div>

    <div class="container text-center" style="min-height: 500px;">
      <h1 class="title-category">Oops!</h1>
      <p>Parece que la página que estás buscando se perdió o no existe.</p>
      <p><a class="btn-ppal" href="/">Ir al Inicio</a></p>
    </div>



    

     <?php include '_footer.php'; ?>
     
  </body>
</html>