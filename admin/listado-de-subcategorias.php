

  
    <!-- Header -->
    <?php include 'header.php'; 
    include("class/cnn2.php");
      $db2 = new DB();?>

    <!-- Sidebar -->
    <?php include 'sidebar.php';
     ?>

    <?php
      $sqlCategorias = "SELECT * FROM piedras_subcategorias ORDER BY subcategoria_orden ASC ";
      $resultadoCategorias = mysql_query($sqlCategorias);      
    ?>


    <script type="text/javascript">
      $(document).ready(function(){
        $('.reorder_link').on('click',function(){
          $("ul.reorder-photos-list").sortable({ tolerance: 'pointer' });
          $('.reorder_link').html('Guardar');
          $('.reorder_link').attr("id","save_reorder");
          $('#reorder-helper').slideDown('slow');
          $('.image_link').attr("href","javascript:void(0);");
          $('.image_link').css("cursor","move");
          $("#save_reorder").click(function( e ){
            if( !$("#save_reorder i").length ){
              $(this).html('').prepend('<img src="dist/img/refresh-animated.gif"/>');
              $("ul.reorder-photos-list").sortable('destroy');
              $("#reorder-helper").html( "Ordenando subcategorias - Esto podría tomar un momento. Por favor, espere..." ).removeClass('light_box').addClass('notice notice_error');
        
              var h = [];
              $("ul.reorder-photos-list li").each(function() {  h.push($(this).attr('id').substr(9));  });
              
              $.ajax({
                type: "POST",
                url: "orderUpdateSubcat.php",
                data: {ids: " " + h + ""},
                success: function(){
                  window.location.reload();
                }
              }); 
              return false;
            } 
            e.preventDefault();   
          });
        });
      });
    </script>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Listado de subcategorías
        <small></small>
      </h1>
      <ol class="breadcrumb hidden">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Listado de subcategorías</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="btns-top">
            <a href="crear-nueva-subcategoria.php" class="btn btn-info"><i class="fa  fa-plus-square"></i> Crear nueva subcategoría</a>
            <!-- <a href="crear-nueva-subcategoria.php" class="btn btn-primary"><i class="fa  fa-plus-square"></i> Crear nueva subcategoría</a> -->
          </div>
        </div>
      </div>

      <!-- <p class="margin-separar text-right">Arrastrar las filas para ordenarlas <i class="fa  fa-arrows-v"></i></p> -->

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-striped">
                <tr>
                  <th>Subcategoria</th>
                  <th>Categoria Padre</th>
                  <!-- <th class="text-center">Subcategorías</th> -->
                  <!-- <th class="text-center">Ordenar</th> -->
                  <th class="text-center">Editar</th>
                  <th class="text-center">Eliminar</th>
                </tr>
                <?php 
                while($filaCategoria = mysql_fetch_assoc($resultadoCategorias)){
                  $categoria_id = $filaCategoria['subcategoria_id'];
                  $categoria_nombre = $filaCategoria['subcategoria_nombre'];


                  $sqlCategoriaPadre = "SELECT * FROM piedras_categorias WHERE categoria_id = " . $filaCategoria['categoria_id'];;
                  $resultadoCategoriasPadre = mysql_query($sqlCategoriaPadre);      
                  while($filaCategoriaPadre = mysql_fetch_assoc($resultadoCategoriasPadre)){
                      $categoria_padre_nombre = $filaCategoriaPadre['categoria_nombre'];
                  }
                  
                  
                ?>
                <tr>
                  <td><?php echo $categoria_nombre; ?></td>
                  <td><?php echo $categoria_padre_nombre; ?></td>
                  <td class="text-center"><a href=<?php echo "'edit-subcategoria.php?id=".$categoria_id."'";?>><i class="fa fa-edit"></i></a></td>
                  <td class="text-center"><a href="#" data-toggle="modal" data-target=<?php echo "'#deleteModal".$categoria_id."'";?>><i class="fa fa-remove"></i></a></td>
                      <form class="form" action="delete-subcategoria.php" method="POST">
                        <div class="modal fade" id=<?php echo "'deleteModal".$categoria_id."'";?> tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                                  <h4 class="modal-title">Atencion!</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Vas a eliminar la subcategoria #<?php echo $categoria_nombre;?></p>
                                  <input type="hidden" name="categoria_id" class="form-control input-lg" value=<?php echo $categoria_id;?>>
                                </div>
                                <div class="modal-footer">
                                  <a href="listado-de-subcategorias.php" class="btn btn-default pull-left">Cancelar</a>
                                  <button type="submit" class="btn btn-danger">Confirmar</button>
                                </div>
                              </div>
                          </div>
                        </div>
                      </form>
                    </td>
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

    
      <div class="box">
                <!-- /.box-header -->                
                <div class="box-body table-responsive no-padding">
                  <div style="margin-top:0px;">
                    <a href="javascript:void(0);" class="btn outlined mleft_no reorder_link" id="save_reorder">Ordenar Subcategorias</a>
                      <div id="reorder-helper" class="light_box" style="display:none;">1. Arrastrar foto para reordenarlas.<br>2. Haga clic en "Guardar" cuando termine.</div>
                      <div class="gallery">
                          <ul class="reorder_ul reorder-photos-list">
                          <?php 
                        //Fetch all images from database
                        $categorias = $db2->getSubCategorias();
                        if(!empty($categorias)){
                          foreach($categorias as $cat){
                              $cat_id = $cat['subcategoria_id'];
                              $imagenes_nombre = $cat['subcategoria_imagen'];
                              
                              
                        ?>
                              <li id="image_li_<?php echo $cat['subcategoria_id']; ?>" class="ui-sortable-handle">
                                <a href="javascript:void(0);" style="float:none; width: 10px;" class="image_link"><img src="../images_admin/subcategorias/<?php echo $imagenes_nombre; ?>" alt=""></a>
                              </li>
                          <?php } } ?>
                          </ul>
                      </div>
                  </div>
                </div>
                <!-- /.box-body -->
            </div>

    </section>
    <!-- /.content -->






  </div>
  <!-- /.content-wrapper -->
  
  <!-- footer -->
<?php include 'footer.php'; ?>



  