    <!-- Header -->
    <?php
      error_reporting(1);
      session_start();
      if (!$_SESSION['admin']){
        //echo "Ud. ha iniciado sesión";
        // echo "<script>location.href='admin.php' </script>";
        echo "<script>location.href='index.php' </script>";
      }

    ?>

    <?php include 'header.php'; ?>

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bienvenida">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Hola!
        <small>Bienvenido al administrador de contenidos de Piedras Patagonia</small>
      </h1>
    </section>
    


    
  </div>
  <!-- /.content-wrapper -->
  
  <!-- footer -->
<?php include 'footer.php'; ?>



  