  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Sidebar -->
  <?php include 'sidebar.php'; ?>

  <?php

    $sqlProductos = "SELECT * FROM `piedras_productos` WHERE producto_id='".$_GET['id']."'";
    $resultadoProductos = mysql_query($sqlProductos);
    $filaProducto = mysql_fetch_assoc($resultadoProductos);

    $producto_id = $filaProducto['producto_id'];
   
    // $sqlImagen = "SELECT * FROM piedras_imagenes WHERE `producto_id` = ".$producto_id." AND `imagenes_estado` = 1";
    $sqlProductosImg = "SELECT * FROM piedras_imagenes WHERE `producto_id` = $producto_id AND `imagenes_estado` = 1";
    $resultadoProductosImg = mysql_query($sqlProductosImg);
    $filaProductosImg = mysql_fetch_assoc($resultadoProductosImg);
    $imagenes_nombre = $filaProductosImg['imagenes_nombre'];

    $db2 = new DB();
    
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
            $("#reorder-helper").html( "Ordenando fotos - Esto podría tomar un momento. Por favor, espere..." ).removeClass('light_box').addClass('notice notice_error');
      
            var h = [];
            $("ul.reorder-photos-list li").each(function() {  h.push($(this).attr('id').substr(9));  });
            
            $.ajax({
              type: "POST",
              url: "orderUpdate.php",
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
        Agregá las imágenes del producto 
        <small><?php echo $producto_nombre; ?></small>
      </h1>
      <ol class="breadcrumb hidden">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Editar producto</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">

<!--       <div class="col-md-12">
        <div class="btns-top">
          <a href="listado-de-productos.php" class="btn btn-info pull-left"><i class="fa  fa-align-left"></i> Ver listado de productos</a>
        </div>
      </div> -->
      <div class="col-md-7">

        <div class="box box-default">
          <div class="box-body">
            <div class="btns-top">
              <p class="text-aqua help-block"><i class="fa fa-file-image-o"></i> Las imágenes deben tener 1200px de ancho por 1600px de alto. Resolución 72 ppi. Formato JPG</p>
              <a href="#" data-toggle="modal" data-target='#addModalImage' class="btn btn-default pull-left"><i class="fa fa-image"></i> Agregar nueva imagen</a>
              <form class="form" action="imagen-producto-add.php" method="POST" enctype="multipart/form-data">
                <div class="modal fade" id='addModalImage' tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                          <h4 class="modal-title">Nueva imagen</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <input type="hidden" name="producto_action" class="form-control input-lg" value="carga">
                            <input type="hidden" name="producto_id" class="form-control input-lg" value=<?php echo "'".$producto_id."'";?>>
                            <p class="text-aqua help-block"><i class="fa fa-file-image-o"></i> Las imágenes deben tener 800px de ancho por 1200px de alto. <br>Resolución 72 ppi</p>
                            <input name="producto_imagen" required type="file" class="btn btn-info" value="Buscar..."/>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Cancelar</button>
                          <button type="submit" class="btn btn-danger">Confirmar</button>
                        </div>
                      </div>
                  </div>
                </div>
              </form>              
            </div>
            <div class="box">
                <!-- /.box-header -->                
                <div class="box-body table-responsive no-padding">
                  <div style="margin-top:0px;">
                    <a href="javascript:void(0);" class="btn outlined mleft_no reorder_link" id="save_reorder">Ordenar Fotos</a>
                      <div id="reorder-helper" class="light_box" style="display:none;">1. Arrastrar foto para reordenarlas.<br>2. Haga clic en "Guardar" cuando termine.</div>
                      <div class="gallery">
                          <ul class="reorder_ul reorder-photos-list">
                          <?php 
                        //Fetch all images from database
                        $images = $db2->getRows($producto_id);
                        if(!empty($images)){
                          foreach($images as $row){
                              $imagenes_id = $row['imagenes_id'];
                              $imagenes_nombre = $row['imagenes_nombre'];
                              $producto_id = $row['producto_id'];
                              $imagenes_estado = $row['imagenes_estado'];                              
                        ?>
                              <li id="image_li_<?php echo $row['imagenes_id']; ?>" class="ui-sortable-handle">
                                <a href="javascript:void(0);" style="float:none; width: 50px;" class="image_link"><img src="../images_admin/productos/<?php echo $row['imagenes_nombre']; ?>" alt=""></a>
                                <a href="#" class="pull-left" data-toggle="modal" data-target=<?php echo "'#deleteModal".$imagenes_id."'";?>><i class="fa fa-remove"></i></a>
                                <a href="#" class="pull-right" data-toggle="modal" data-target=<?php echo "'#updateModal".$imagenes_id."'";?>><i class="fa fa-edit"></i></a>
                                <form class="form" action="imagen-producto-delete.php" method="POST">
                              <input type="hidden" name="producto_action" class="form-control input-lg" value="carga">

                                  <div class="modal fade" id=<?php echo "'deleteModal".$imagenes_id."'";?> tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Atencion!</h4>
                                          </div>
                                          <div class="modal-body">
                                            <p>Vas a eliminar la imagen.</p>
                                            <input type="hidden" name="imagenes_id" class="form-control input-lg" value=<?php echo $imagenes_id;?>>
                                            <input type="hidden" name="producto_id" class="form-control input-lg" value=<?php echo "'".$producto_id."'";?>>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-danger">Confirmar</button>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </form>                                
                                <form class="form" action="imagen-producto-update.php" method="POST" enctype="multipart/form-data">
                              <input type="hidden" name="producto_action" class="form-control input-lg" value="carga">
                                
                                  <div class="modal fade" id=<?php echo "'updateModal".$imagenes_id."'";?> tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Actualizar imagen</h4>
                                          </div>
                                          <div class="modal-body">
                                            <div class="form-group">
                                              <p class="text-aqua help-block"><i class="fa fa-file-image-o"></i> Las imágenes deben tener 800px de ancho por 1200px de alto. Resolución 72 ppi</p>
                                              <input required name="producto_imagen" type="file" class="btn btn-info" value="Buscar..."/>
                                              <input type="hidden" name="producto_id" class="form-control input-lg" value=<?php echo "'".$producto_id."'";?>>
                                              <input type="hidden" name="imagenes_id" class="form-control input-lg" value=<?php echo "'".$imagenes_id."'";?>>
                                              <div class="carga-img" style="height:auto!important;">
                                                <img class="img-responsive" src=<?php echo "'../images_admin/productos/".$imagenes_nombre."'"; ?>>
                                              </div>                                    
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-danger">Confirmar</button>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </form>
                              </li>
                          <?php } } ?>
                          </ul>
                      </div>
                  </div>
                </div>
                <!-- /.box-body -->
            </div>
                <div class="separador"></div>
            
              <div class="btns-cargar">
                <?php if($countProductosImagenes==0){ ?>
                <a href="#" class="btn btn-default pull-left" data-toggle="modal" data-target='#cancelarModal'>Cancelar</a>
                <?php }; ?>
                <a class="btn btn-success pull-right" href="listado-de-productos.php">Finalizar</a>
                <div class="modal fade" id='cancelarModal' tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                          <h4 class="modal-title">Atencion!</h4>
                        </div>
                        <div class="modal-body">
                          <p>Vas a cargar el producto sin imagenes.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Cancelar</button>
                          <button type="submit" class="btn btn-danger">Confirmar</button>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

    </div>

    </section>
    <!-- /.content -->






  </div>
  <!-- /.content-wrapper -->

  <script>
     document.getElementById("files").onchange = function () {
      var reader = new FileReader();

      reader.onload = function (e) {
          // get loaded data and render thumbnail.
          document.getElementById("image").src = e.target.result;
      };

      // read the image file as a data URL.
      reader.readAsDataURL(this.files[0]);
  };
  </script>

  <script language="javascript" type="text/javascript">
        window.onload = function () {
            var fileUpload = document.getElementById("fileupload");
            fileUpload.onchange = function () {
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = document.getElementById("dvPreview");
                    dvPreview.innerHTML = "";
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    for (var i = 0; i < fileUpload.files.length; i++) {
                        var file = fileUpload.files[i];
                        if (regex.test(file.name.toLowerCase())) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var img = document.createElement("IMG");
                                img.height = "100";
                                img.width = "100";
                                img.src = e.target.result;
                                dvPreview.appendChild(img);
                            }
                            reader.readAsDataURL(file);
                        } else {
                            alert(file.name + " is not a valid image file.");
                            dvPreview.innerHTML = "";
                            return false;
                        }
                    }
                } else {
                    alert("This browser does not support HTML5 FileReader.");
                }
            }
        };
    </script>

    <script type="text/javascript">    
//configuration
var max_file_size       = 2048576; //allowed file size. (1 MB = 1048576)
var allowed_file_types    = ['image/png', 'image/gif', 'image/jpeg', 'image/pjpeg']; //allowed file types
var result_output       = '#output'; //ID of an element for response output
var my_form_id        = '#upload_form'; //ID of an element for response output
var progress_bar_id     = '#progress-wrp'; //ID of an element for response output
var total_files_allowed   = 3; //Number files allowed to upload



//on form submit
$(my_form_id).on( "submit", function(event) { 
  event.preventDefault();
  var proceed = true; //set proceed flag
  var error = []; //errors
  var total_files_size = 0;
  
  //reset progressbar
  $(progress_bar_id +" .progress-bar").css("width", "0%");
  $(progress_bar_id + " .status").text("0%");
              
  if(!window.File && window.FileReader && window.FileList && window.Blob){ //if browser doesn't supports File API
    error.push("Your browser does not support new File API! Please upgrade."); //push error text
  }else{
    var total_selected_files = this.elements['__files[]'].files.length; //number of files
    
    //limit number of files allowed
    if(total_selected_files > total_files_allowed){
      error.push( "You have selected "+total_selected_files+" file(s), " + total_files_allowed +" is maximum!"); //push error text
      proceed = false; //set proceed flag to false
    }
     //iterate files in file input field
    $(this.elements['__files[]'].files).each(function(i, ifile){
      if(ifile.value !== ""){ //continue only if file(s) are selected
        if(allowed_file_types.indexOf(ifile.type) === -1){ //check unsupported file
          error.push( "<b>"+ ifile.name + "</b> is unsupported file type!"); //push error text
          proceed = false; //set proceed flag to false
        }

        total_files_size = total_files_size + ifile.size; //add file size to total size
      }
    });
    
    //if total file size is greater than max file size
    if(total_files_size > max_file_size){ 
      error.push( "You have "+total_selected_files+" file(s) with total size "+total_files_size+", Allowed size is " + max_file_size +", Try smaller file!"); //push error text
      proceed = false; //set proceed flag to false
    }
    
    var submit_btn  = $(this).find("input[type=submit]"); //form submit button  
    
    //if everything looks good, proceed with jQuery Ajax
    if(proceed){
      //submit_btn.val("Please Wait...").prop( "disabled", true); //disable submit button
      var form_data = new FormData(this); //Creates new FormData object
      var post_url = $(this).attr("action"); //get action URL of form
      
      //jQuery Ajax to Post form data
$.ajax({
  url : post_url,
  type: "POST",
  data : form_data,
  contentType: false,
  cache: false,
  processData:false,
  xhr: function(){
    //upload Progress
    var xhr = $.ajaxSettings.xhr();
    if (xhr.upload) {
      xhr.upload.addEventListener('progress', function(event) {
        var percent = 0;
        var position = event.loaded || event.position;
        var total = event.total;
        if (event.lengthComputable) {
          percent = Math.ceil(position / total * 100);
        }
        //update progressbar
        $(progress_bar_id +" .progress-bar").css("width", + percent +"%");
        $(progress_bar_id + " .status").text(percent +"%");
      }, true);
    }
    return xhr;
  },
  mimeType:"multipart/form-data"
}).done(function(res){ //
  $(my_form_id)[0].reset(); //reset form
  $(result_output).html(res); //output response from server
  submit_btn.val("Upload").prop( "disabled", false); //enable submit button once ajax is done
});
      
    }
  }
  
  $(result_output).html(""); //reset output 
  $(error).each(function(i){ //output any error to output element
    $(result_output).append('<div class="error">'+error[i]+"</div>");
  });
    
});
</script>
  
  <!-- footer -->
<?php include 'footer.php'; ?>



  