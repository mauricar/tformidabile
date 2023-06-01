

  
    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

     <?php 
      $sqlSubCategorias = "SELECT * FROM `piedras_subcategorias` WHERE subcategoria_id='".$_GET['id']."'";
      $resultadoSubCategorias = mysql_query($sqlSubCategorias);
      $filaSubCategoria = mysql_fetch_assoc($resultadoSubCategorias);

      $subcategoria_id = $filaSubCategoria['subcategoria_id'];
      $subcategoria_nombre = $filaSubCategoria['subcategoria_nombre'];
      $subcategoria_padre_id = $filaSubCategoria['categoria_id'];
      $subcategoria_imagen = $filaSubCategoria['subcategoria_imagen'];
    ?>

    <?php
      $sqlCategorias = "SELECT * FROM piedras_categorias ORDER BY categoria_id DESC ";
      $resultadoCategorias = mysql_query($sqlCategorias);      
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar subcategoría
        <small></small>
      </h1>
      <ol class="breadcrumb hidden">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Editar subcategoría</li>
      </ol>
    </section>





    <!-- Main content -->
    <section class="content">

    <div class="row">

      <div class="col-md-9">

        <div class="box box-default">
          <div class="box-body">
            <form name="formNuevoSubCategoria" class="form" action="update-subcategoria.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="subcategoria_id" value=<?php echo $subcategoria_id; ?>>
              <div class="form-group">
                <label>Nombre de la subcategoría</label>
                <input type="text" name="subcategoria_nombre" required class="form-control input-lg" placeholder="Ingrese nombre de la subcategoria" value=<?php echo "'".$subcategoria_nombre."'"; ?>>
              </div>

              <div class="form-group">
                <label>A que categoría pertenece?</label>
                <select required name="categoria_id" class="form-control input-lg">
                  <?php
                  while($filaCategoria = mysql_fetch_assoc($resultadoCategorias)){
                    $categoria_id = $filaCategoria['categoria_id'];
                    $categoria_nombre = $filaCategoria['categoria_nombre'];
                  ?>
                  <option value="<?php echo $categoria_id; ?>" <?php echo ( $categoria_id == $subcategoria_padre_id) ? 'selected' : ''; ?>><?php echo $categoria_nombre; ?></option>
                  <?php
                    };
                  ?>
                </select>
              </div>

              <div class="form-group">
                <label>Imagen de portada</label>
                <p class="text-aqua help-block"><i class="fa fa-file-image-o"></i> Las imágenes deben tener 800px de ancho por 570px de alto. Resolución 72 ppi</p>
                <input name="subcategoria_imagen" type="file" class="btn btn-info" value="Buscar..."/>
                <input type="hidden" name="subcategoria_imagen_hidden" value=<?php echo "'".$subcategoria_imagen."'"; ?>>
                <div class="carga-img" style="height:auto!important;">
                  <img class="img-responsive" src=<?php echo "'../images_admin/subcategorias/".$subcategoria_imagen."'"; ?>>
                </div>
              </div>

              <div class="separador"></div>              
              
              <div class="btns-cargar">
                 <a href="listado-de-subcategorias.php" class="btn btn-default pull-left">Cancelar</a>
                <input name="actualizar" class="btn btn-success pull-right" type="submit" value="Actualizar">
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



