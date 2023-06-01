  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Sidebar -->
  <?php include 'sidebar.php'; ?>

  <?php
    $sqlCategorias = "SELECT * FROM piedras_categorias ORDER BY categoria_nombre ASC ";
    $resultadoCategorias = mysql_query($sqlCategorias);      
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cargar nuevo producto
        <small></small>
      </h1>
      <ol class="breadcrumb hidden">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Cargar nuevo producto</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">

      <div class="col-md-8">

        <div class="box box-default">
          <div class="box-body">
            <form name="formNuevoProducto" class="form" action="add-nuevo-producto.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label>Titulo del producto</label>
                <input type="text" name="producto_nombre" class="form-control input-lg" placeholder="">
              </div>
              <div class="form-group">
                <label>Descripción Corta</label>
                <textarea name="producto_subtitulo" class="form-control input-lg"></textarea>
              </div>

              <div class="form-group">
                <label>Descripción</label>
                <textarea id="summernote" type="text" name="producto_descripcion" rows="4" class="" placeholder=""></textarea>
              </div>

              <div class="form-group">
                <label>Producto destacado</label>
                <input type="checkbox" name="producto_destacado" class="form-control input-lg checkbox">
              </div>

              <div class="separador"></div>

              <div class="form-group">
                <label>Imágen principal</label>
                <p class="text-aqua help-block"><i class="fa fa-file-image-o"></i> Las imágenes deben tener 800px de ancho por 570px de alto. Resolución 72 ppi</p>
              
                <input name="producto_imagen" type="file" class="btn btn-info" value="Buscar..."/>
                <div class="carga-img" style="height: 120px; !important;">
                  <div id="dvPreview"></div>
                </div>
                
              </div>
             

              <div class="separador"></div>

              <div class="form-group">
                <label>Imágenes adicionales del producto</label>
                <p class="text-aqua help-block"><i class="fa fa-file-image-o"></i> Las imágenes deben tener 800px de ancho por 570px de alto. Resolución 72 ppi</p>
              
                <input multiple="multiple"  name="producto_imagenes" type="file" class="btn btn-info" value="Buscar..."/>
                <div class="carga-img" style="height: 120px; !important;">
                  <div id="dvPreview2"></div>
                </div>
                
              </div>



              <div class="separador"></div>


              <div class="categories-tree">
                  <h5>Selecciona la categoría del producto</h5>


                  <div class="form-group">

                      <?php 
                        while($filaCategoria = mysql_fetch_assoc($resultadoCategorias)){
                          $categoria_id = $filaCategoria['categoria_id'];
                          $categoria_nombre = $filaCategoria['categoria_nombre'];
                      ?>
                      <div class="checkbox checkbox-cat-ppal">
                        <label for="radio-<?php echo $categoria_id; ?>">
                          <input required id="radio-<?php echo $categoria_id; ?>" type="radio" name="producto_categoria[]" class="category-prod" value="<?php echo $categoria_id; ?>">&nbsp;&nbsp;<?php echo $categoria_nombre; ?></label>
                      </div>
                      <?php
                        };
                      ?>


                  </div><!-- Fin form-group -->



              </div><!-- Fin row categories-tree-->


              <div class="categories-tree" id="subcategory-cont">
                  


              </div><!-- Fin row categories-tree-->

              <div class="separador"></div>

              <div class="btns-cargar">
                <a href="listado-de-productos.php" class="btn btn-default pull-left">Cancelar</a>
                <button class="btn btn-success pull-right">Guardar</button>
                <div class="checkbox icheck margin pull-right">
                 <!-- <label>
                    <input checked name="producto_online" type="checkbox" value="Publicado"> Publicar
                  </label>-->
                </div>
              </div>
            </form>

          </div>



        </div>
      </div>

      <div class="col-md-3">
        <div class="btns-top">
          <a href="listado-de-productos.php" class="btn btn-info pull-left"><i class="fa  fa-align-left"></i> Ver listado de productos</a>
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



  