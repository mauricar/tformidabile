

  
    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <?php 
      $sqlSlide = "SELECT * FROM `piedras_slider` WHERE slider_id='".$_GET['id']."'";
      $resultadoSlide = mysql_query($sqlSlide);
      $filaSlide = mysql_fetch_assoc($resultadoSlide);
      $slider_id = $filaSlide['slider_id'];
      $slider_titulo = $filaSlide['slider_titulo'];
      $slider_subtitulo = $filaSlide['slider_subtitulo'];
      $slider_link = $filaSlide['slider_link'];
      $slider_imagen = $filaSlide['slider_imagen'];
      $slider_online = $filaSlide['slider_online'];
    ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar slide
        <small></small>
      </h1>
      <ol class="breadcrumb hidden">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Cargar nuevo slide</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">

      <div class="col-md-9">

        <div class="box box-default">
          <div class="box-body">
            <form name="formNuevoSlider" class="form" action="update-slider.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="slider_id" value=<?php echo $slider_id; ?>>
              <div class="form-group">
                <label>Título</label>
                <input type="text" name="slider_titulo" value="<?php echo $slider_titulo;?>" class="form-control input-lg" placeholder="">
              </div> 
              <div class="form-group">
                <label>Subtítulo</label>
                <input type="text" name="slider_subtitulo" class="form-control input-lg" value="<?php echo $slider_subtitulo;?>" placeholder="">
              </div> 

              <div class="form-group">
                <label>Link del slider</label>
                <div class="input-group">
                  
                  <input type="text" name="slider_link" class="form-control input-lg" value=<?php echo "'".$slider_link."'"; ?>>
                </div>
              </div>
              <div class="form-group">
                <label>Imagen</label>
                <p class="text-aqua help-block"><i class="fa fa-file-image-o"></i> Las imágenes deben tener 1700px de ancho por 800px de alto. Resolución 72 ppi</p>
                <input name="slider_imagen" type="file" class="btn btn-info" value="Buscar..."/>
                <input type="hidden" name="slider_imagen_hidden" value=<?php echo "'".$slider_imagen."'"; ?>>
                <div class="carga-img" style="height:auto!important;">
                  <img class="img-responsive" src=<?php echo "'../images_admin/slider/".$slider_imagen."'"; ?>>
                </div>
              </div>

              <div class="separador"></div>
              
              <div class="btns-cargar">
                <a href="listado-de-slides.php" class="btn btn-default pull-left">Cancelar</a>
                <button class="btn btn-success pull-right">Cargar</button>
                <!--<div class="checkbox icheck margin pull-right">
                  <label>
                    <input <?php if($slider_online=="Publicado"){ echo "checked";} ?> name="slider_online" type="checkbox" value="Publicado">
                    <?php echo $slider_online; ?>
                  </label>
                </div>-->
              </div>
            </form>

          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="btns-top">
          <a href="listado-de-slides.php" class="btn btn-info pull-left"><i class="fa  fa-align-left"></i> Ver listado de slides</a>
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



  