    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <?php
      $sqlSlider = "SELECT * FROM piedras_slider ORDER BY slider_id DESC ";
      $resultadoSlider = mysql_query($sqlSlider);      
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Listado de slides
        <small></small>
      </h1>
      <ol class="breadcrumb hidden">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Listado de slides</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="btns-top">
            <a href="cargar-nuevo-slide.php" class="btn btn-info pull-left"><i class="fa  fa-plus-square"></i> Cargar nuevo slide</a>
            <div class="input-group input-group-sm pull-right hidden" style="width: 200px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar...">
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body table-responsive no-padding">
              <table class="table table-striped">
                <tr>
                  <th>Imagen</th>
                  <th class="text-center">Eliminar</th>
                  <th class="text-center">Editar</th>
                  <!--<th class="text-center">Estado</th>-->
                </tr>
                <?php 
                while($filaSlide = mysql_fetch_assoc($resultadoSlider)){
                  $slider_id = $filaSlide['slider_id'];
                  $slider_titulo = $filaSlide['slider_titulo'];
                  $slider_imagen = $filaSlide['slider_imagen'];
                  $slider_online = $filaSlide['slider_online'];
                ?>
                  <tr>
                    <td><img class="thumbnail-list" src=<?php echo "'../images_admin/slider/".$slider_imagen."'"; ?>></td>
                    <td class="text-center"><a href="#" data-toggle="modal" data-target=<?php echo "'#deleteModal".$slider_id."'";?>><i class="fa fa-remove"></i></a></td>
                      <form class="form" action="delete-slider.php" method="POST">
                        <div class="modal fade" id=<?php echo "'deleteModal".$slider_id."'";?> tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                                  <h4 class="modal-title">Atencion!</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Vas a eliminar la slider <strong><?php echo $slider_titulo;?></strong></p>
                                  <input type="hidden" name="slider_id" class="form-control input-lg" value=<?php echo $slider_id;?>>
                                </div>
                                <div class="modal-footer">
                                  <a href="listado-de-slides.php" class="btn btn-default pull-left">Cancelar</a>
                                  <button type="submit" class="btn btn-danger">Confirmar</button>
                                </div>
                              </div>
                          </div>
                        </div>
                      </form>
                    <td class="text-center"><a href=<?php echo "'edit-slider.php?id=".$slider_id."'";?>><i class="fa fa-edit"></i></a></td>
                    <!--<td class="text-center"><span class="label label-success"><?php echo $slider_online; ?></span></td>-->
                  </tr>
                <?php
                };
                ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  
  <!-- footer -->
<?php include 'footer.php'; ?>



  