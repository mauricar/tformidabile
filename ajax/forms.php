<?php

include_once("PHPMailer/class.phpmailer.php");

switch ($_REQUEST['accion']) {
	
	case "enviarMensaje":

		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$mensaje = $_POST['mensaje'];
		
		//ENVIO EL MAIL AL DESTINATARIO
		//asunto del mail
		$asunto_mail = utf8_encode("Nuevo mensaje recibido desde la web");
							
		//cuerpo del mail
		$cuerpo_mail = "<p><b>Nombre: </b>" . htmlentities($nombre) ."<br>";
		$cuerpo_mail .= "<p><b>Email: </b>" . $email  ."<br><br>";
		
		$cuerpo_mail .= "<p><b>Mensaje: </b>" . htmlentities($mensaje)  ."</p><br><br>";
		
						
		//realizo el envio
		$sendmail = new PHPMailer();
		$sendmail->IsSMTP();
		$sendmail->SMTPAuth = true;
		$sendmail->Host = 'mail.piedraspatagonia.com.ar';
		$sendmail->Port = 587;
		$sendmail->Username = 'envios@piedraspatagonia.com.ar';
		$sendmail->Password = '9yY=1L+rfypp';
		$sendmail->SetFrom("envios@piedraspatagonia.com.ar", "Piedras Patagonia");
		//$sendmail->AddAddress("info@mcardin.com.ar");
		$sendmail->AddAddress("piedrasptg@gmail.com");
		$sendmail->Subject = $asunto_mail;
		$sendmail->MsgHTML($cuerpo_mail);
		
		if($sendmail->Send()){
			echo "ok";
		}else{
			echo $sendmail->ErrorInfo;
		}

		break;

	

}