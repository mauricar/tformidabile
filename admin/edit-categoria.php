

  
    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>  

    <?php 
      $sqlCategorias = "SELECT * FROM `piedras_categorias` WHERE categoria_id='".$_GET['id']."'";
      $resultadoCategorias = mysql_query($sqlCategorias);
      $filaCategoria = mysql_fetch_assoc($resultadoCategorias);

      $categoria_id = $filaCategoria['categoria_id'];
      $categoria_nombre = $filaCategoria['categoria_nombre'];
      $categoria_linea = $filaCategoria['categoria_linea'];
      $categoria_imagen = $filaCategoria['categoria_imagen'];
    ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar Categoria
        <small></small>
      </h1>
      <ol class="breadcrumb hidden">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Editar Categoria</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">
      <div class="col-md-9">
        <div class="box box-default">
          <div class="box-body">
            <form name="formNuevoReceta" class="form" action="update-categoria.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="categoria_id" value=<?php echo $categoria_id; ?>>

              <div class="form-group">
                <label>Editar nombre de la categoria</label>
                <input type="text" required name="categoria_nombre" class="form-control input-lg" value=<?php echo "'".$categoria_nombre."'"; ?>>
              </div>

              
              <input type="hidden" name="categoria_linea" value="">
               <div class="form-group">
                <label>Imagen</label>
                <p class="text-aqua help-block"><i class="fa fa-file-image-o"></i> Las imágenes deben tener 800px de ancho por 570px de alto. Resolución 72 ppi</p>
                <input name="categoria_imagen" type="file" class="btn btn-info" value="Buscar..."/>
                <input type="hidden" name="categoria_imagen_hidden" value=<?php echo "'".$categoria_imagen."'"; ?>>
                <div class="carga-img" style="height:auto!important;">
                  <img class="img-responsive" src=<?php echo "'../images_admin/categorias/".$categoria_imagen."'"; ?>>
                </div>
              </div>

              <div class="separador"></div> 
              
              <div class="btns-cargar">
                <a href="listado-de-categorias.php" class="btn btn-default pull-left">Cancelar</a>
                <input name="actualizar" class="btn btn-success pull-right" type="submit" value="Actualizar">
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="btns-top">
          <a href="listado-de-categorias.php" class="btn btn-info pull-left"><i class="fa  fa-align-left"></i> Ver listado de categorias</a>
        </div>
      </div>

    </div>

      

      
      

    </section>
    <!-- /.content -->






  </div>
  <!-- /.content-wrapper -->


  
  <!-- footer -->
<?php include 'footer.php'; ?>



  