<?php
session_start(); //este archivo sirve para crear las variables de seccion

$admin = $_GET['admin'];


//acá hacemso la cookie que determina una hora de duración de sesion
setcookie("startloguinadmin","ok",time()+60*60,"/");
// echo "<script>location.href='admin.php'</script>";
echo "<script>location.href='administrador.php'</script>";
?>

