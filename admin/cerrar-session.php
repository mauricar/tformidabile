<?php
	session_start();
	unset( $_SESSION["admin"] );
	setcookie("startloguinadmin","ok",time()-3600,"/");
	header("Location: index.php"); //env�o al usuario a la pag. de autenticaci�n
?>