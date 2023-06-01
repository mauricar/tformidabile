<?php
	session_start();
?>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
<body>

<?php
	include("class/cnn.php");

	$user = $_POST["user"];
	$pass = $_POST["pass"];

	// echo $user;

	$sql = "SELECT * FROM piedras_admin WHERE admin_user = '".$user."'";
	$result = mysql_query($sql, $link) or die(mysql_error());
	$row = mysql_fetch_array($result, MYSQL_ASSOC);
	
	if($row){	
		if($row["admin_pass"] == $pass){
			$_SESSION['admin'] = $user;
			echo "<script>location.href='administrador.php'</script>";
		}else{
			echo "<script>location.href='index.php'</script>";
		}		
	}else{
		echo "<script>location.href='index.php'</script>";
	}
?>


</body>
</html>