

  
    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear nueva categoría
        <small></small>
      </h1>
      <ol class="breadcrumb hidden">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Crear nueva categoría</li>
      </ol>
    </section>





    <!-- Main content -->
    <section class="content">

    <div class="row">

      <div class="col-md-9">

        <div class="box box-default">
          <div class="box-body">
            <form  name="formNuevoCategoria" class="form" action="add-nueva-categoria.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label>Nombre de la categoría</label>
                <input type="text" class="form-control input-lg" required name="categoria_nombre" placeholder="Ingrese nombre de la categoria">
              </div>
             
              <input type="hidden" name="categoria_linea" value="">
              <div class="form-group">
                <label>Imagen</label>
                <p class="text-aqua help-block"><i class="fa fa-file-image-o"></i> Las imágenes deben tener 800px de ancho por 570px de alto. Resolución 72 ppi</p>
                <input name="categoria_imagen" type="file" class="btn btn-info" value="Buscar..."/>
                <div class="carga-img"></div>
              </div>
                
              
              <div class="separador"></div>         
              <div class="btns-cargar">
                <a href="listado-de-categorias.php" class="btn btn-default pull-left">Cancelar</a>
                <button class="btn btn-success pull-right">Crear</button>
              </div>
            </form>

          </div>



        </div>
      </div>

      <div class="col-md-3">
        <div class="btns-top">
          <a href="listado-de-categorias.php" class="btn btn-info pull-left"><i class="fa  fa-align-left"></i> Ver listado de categorías</a>
        </div>
        <div class="callout callout-info hidden">
          <h4><i class="fa fa-fw fa-comments"></i></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque suscipit ligula interdum bibendum accumsan. Donec hendrerit porttitor commodo.</p>
        </div>
      </div>

    </div>

      

      
      

    </section>
    <!-- /.content -->






  </div>
  <!-- /.content-wrapper -->
  
  <!-- footer -->
<?php include 'footer.php'; ?>



  