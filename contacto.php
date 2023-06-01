<?php 

  /* include("admin/class/cnn.php"); */
  include("admin/class/funciones.php");



  $seccion = "contacto";

?>
<!DOCTYPE html>
<html lang="es">
  <head>

    <meta name="description" content="" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Contacto - Piedras Patagonia</title>


    <?php include '_inside_head.php'; ?>
    
  </head>
  <body>


    <?php include '_header.php'; ?>
    <?php include '_menu_productos.php'; ?>


    <div class="container">
      <ol class="breadcrumb">
        <li><a href="<?php echo $base_url;?>">Home</a></li>
        <li class="active">Contacto</li>
      </ol>
    </div>

    <div class="container">
      <h1 class="title-category">Contacto</h1>
    </div>

    <div class="container-productos">
      <div class="container">
        <div class="row">

        <div class="col-md-6">


          <!-- Consulta OK -->
          <div class="consulta-ok hidden">
            <h4>Tu consulta fue enviada!</h4>
            <p>Nos contactaremos lo mas pronto posible.</p>
          </div>



          <form>

            <div class="consulta-producto hidden">
              <div class="row">
                 <div class="col-md-3">
                  <img class="img-responsive" src="images/productos/porfidos/porfido-prensa.jpg">
                 </div>
                 <div class="col-md-9">
                  <p>Estás consultando por el siguiente producto:</p>
                  <h6>Pórfidos / Corte a prensa</h6>
                 </div>
              </div>
            </div>
            <div class="alert alert-success hide" role="alert">
              Gracias por su mensaje. Nos pondremos en contacto a la brevedad.
            </div> 
            <div class="alert alert-danger hide" role="alert">
              Ocurrió un error al enviar el mensaje, por favor vuelva a intentarlo.
            </div>
             <div class="form-group">
                <label for="">Nombre</label>
                <input type="" class="form-control" id="nombre" placeholder="Nombre">
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="">Consulta</label>
                <textarea class="form-control" rows="5" id="mensaje" placeholder=""></textarea>
              </div>
              <button type="button" class="btn-ppal btn-envio">Enviar</button>
          </form>
        </div>

        <div class="col-md-6">
          <div class="datos-contacto">
            <h5 class="hidden">Datos de Contacto</h5>
            <ul>
              <li>Pedro Martín 1591 (ex Curupayti), Morón, Buenos Aires</li>
              <li>Lu a Vi de 8 a 12 hs y de 14 a 18hs</li>
              <li>Sáb de 8 a 13hs</li>
            </ul>
            <ul>
              <li><img class="img-responsive icon" src="images/icon-tel.svg" alt="Teléfono"> (011) 4696-1340</li>
              <li>
                <a href="https://api.whatsapp.com/send?phone=5491127118100" target="_blank">
                  <img class="img-responsive icon" src="images/icon-whatsapp.svg" alt="WhatsApp"> 11 2711 8100
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/piedraspatagonia/" target="_blank">
                  <img class="img-responsive icon" src="images/icon-instagram.svg" alt="Instagram"> Instagram
                </a>
              </li>
              <li><a href="mailto:piedrasptg@gmail.com">piedrasptg@gmail.com</a></li>
            </ul>
          </div>
        </div>



        </div>
      </div>
    </div>


    <div class="mapa">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d820.3950710792127!2d-58.600932588504406!3d-34.66530125883928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc7a7564efe9f%3A0xec7471a3d29c6780!2sPiedras+Patagonia!5e0!3m2!1ses-419!2sar!4v1535055989663" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    



    

     <?php include '_footer.php'; ?>
     
  </body>
</html>