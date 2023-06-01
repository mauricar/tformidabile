<?php
	session_start();
	unset( $_SESSION["admin"] );
	setcookie("startloguinadmin","ok",time()-3600,"/");
	header("Location: index.php"); //envío al usuario a la pag. de autenticación
?>