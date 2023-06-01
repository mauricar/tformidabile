<?php
error_reporting(0);
session_start();
if ($_SESSION['admin']){
	echo "<script>location.href='administrador.php' </script>";
}else{
	echo "<script>location.href='index.php' </script>";
}