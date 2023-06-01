    <!-- Header -->
    <?php 


      include 'header.php';
      include("class/cnn2.php");
      $db2 = new DB();
    ?>

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>


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
              $("#reorder-helper").html( "Ordenando fotos - Esto podría tomar un momento. Por favor, espere..." ).removeClass('light_box').addClass('notice notice_error');
        
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




    <?php
      // $sqlProductos = "SELECT * FROM piedras_productos ORDER BY producto_id DESC ";
      // $resultadoProductos = mysql_query($sqlProductos); 
      if(isset($_POST['buscar'])){
        $termino_busqueda = $_POST['q'];
        $sqlProductos = "SELECT * 
        FROM  piedras_productos 
        WHERE  producto_nombre LIKE  '%".$termino_busqueda."%' OR  producto_descripcion LIKE  '%".$termino_busqueda."%' OR  producto_subtitulo LIKE  '%".$termino_busqueda."%' ORDER BY producto_orden ASC";
        $resultadoProductos = mysql_query($sqlProductos);
      }else{
        $sqlProductos = "SELECT * FROM piedras_productos ORDER BY producto_orden ASC";
        $resultadoProductos = mysql_query($sqlProductos);
      }   
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Listado de productos
        <small></small>
      </h1>
      <ol class="breadcrumb hidden">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Listado de productos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="btns-top">
              <a href="cargar-nuevo-producto.php" class="btn btn-info pull-left"><i class="fa  fa-plus-square"></i> Cargar nuevo producto</a>
              <form action="listado-de-productos.php" method="post" enctype="multipart/form-data">
                  <div class="input-group input-group-sm pull-right" style="width: 200px;">
                      <input type="text" name="q" class="form-control pull-right" placeholder="Buscar...">
                      <div class="input-group-btn">
                        <button type="submit" name="buscar" class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
              </form>
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
                <tr class="text-center">
                  <!-- <th class="text-center">ID</th> -->
                  <th class="text-center"></th>
                    <th class="text-center">Producto</th>
                    <th class="text-center">Categoria</th>
                    <th class="text-center">Destacado</th>
                 
                    <th class="text-center">Eliminar</th>
                    <th class="text-center">Editar</th>
                    
                </tr>
                <?php 
                while($filaProducto = mysql_fetch_assoc($resultadoProductos)){
                  $producto_id = $filaProducto['producto_id'];
                  $producto_nombre = $filaProducto['producto_nombre'];
                  $producto_categoria = $filaProducto['producto_categoria'];
                  $producto_imagen = $filaProducto['producto_imagen'];
                  $producto_destacado = $filaProducto['producto_destacado'];
                  
                  
                  $sqlCategoriaPadre = "SELECT * FROM piedras_categorias WHERE categoria_id = " . $producto_categoria;
                  $resultadoCategoriasPadre = mysql_query($sqlCategoriaPadre);      
                  while($filaCategoriaPadre = mysql_fetch_assoc($resultadoCategoriasPadre)){
                      $categoria_padre_nombre = $filaCategoriaPadre['categoria_nombre'];

                  }
                  
                ?>
                  <tr class="text-center">
                    <td><img class="thumbnail-list" src=<?php echo "'../images_admin/productos/".$producto_imagen."'"; ?></td>
                    <td><?php echo $producto_nombre; ?></td>
                    <td><?php echo $categoria_padre_nombre; ?></td>
                    <td><?php echo ( $producto_destacado == 1) 
                                          ? '<a href="set-destacado.php?id=' . $producto_id . '&remove"><i class="fa fa-remove"></i></a>' 
                                          : '<a href="set-destacado.php?id=' . $producto_id . '&add""><i class="fa fa-check"></i></a>'; ?></td>
                    <td><a href="#" data-toggle="modal" data-target=<?php echo "'#deleteModal".$producto_id."'";?>><i class="fa fa-trash"></i></a></td>
                      <form class="form" action="delete-producto.php" method="POST">
                        <div class="modal fade" id=<?php echo "'deleteModal".$producto_id."'";?> tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                                  <h4 class="modal-title">Atencion!</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Vas a eliminar el producto #<?php echo $producto_nombre;?></p>
                                  <input type="hidden" name="producto_id" class="form-control input-lg" value=<?php echo $producto_id;?>>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Cancelar</button>
                                  <button type="submit" class="btn btn-danger">Confirmar</button>
                                </div>
                              </div>
                          </div>
                        </div>
                      </form>
                    </td>
                    <td class="text-center"><a href=<?php echo "'edit-producto.php?id=".$producto_id."'";?>><i class="fa fa-edit"></i></a></td>
                    
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
                    <a href="javascript:void(0);" class="btn outlined mleft_no reorder_link" id="save_reorder">Ordenar Productos</a>
                      <div id="reorder-helper" class="light_box" style="display:none;">1. Arrastrar foto para reordenarlas.<br>2. Haga clic en "Guardar" cuando termine.</div>
                      <div class="gallery">
                          <ul class="reorder_ul reorder-photos-list">
                          <?php 
                        //Fetch all images from database
                        $productos = $db2->getProductos();
                        if(!empty($productos)){
                          foreach($productos as $producto){
                              $producto_id = $producto['producto_id'];
                              $imagenes_nombre = $producto['producto_imagen'];
                              
                              
                        ?>
                              <li id="image_li_<?php echo $producto['producto_id']; ?>" class="ui-sortable-handle">
                                <a href="javascript:void(0);" style="float:none; width: 10px;" class="image_link"><img src="../images_admin/productos/<?php echo $imagenes_nombre; ?>" alt=""></a>
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


  