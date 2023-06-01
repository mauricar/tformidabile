<?php
session_start();//se pone siempre, si no no hay sesion
if (isset($_SESSION['admin'])){
	//echo "Ud. ha iniciado sesión";
} else{
	//echo "NO SE HA PODIDO INICIAR SESIÓN";
	//ahora cuando detecta que no hay sesión, debe redireccionar al login,lo hacemos con un java script
	echo "<script>location.href='index.php' </script>";
	}

?>
