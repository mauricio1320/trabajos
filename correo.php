<?php

    require ('mail.php');
    $db = conectar();
    
    //aqui se envia al correo designado
    //$destinatario = '1247523@senati.pe';

    //pasamos los atributos de los campos por el metodo POST
    //$nombre = $_POST['nombre'];
    //$email = $_POST['email'];
    //$mensaje = $_POST['mensaje'];

    //mensaje que sale en la cabecera
    //$header = "Enviado correctamente";
    //$mensajeCompleto = $mensaje ."\nAtentamente: ". $nombre;
            
    //@mail($destinatario,$mensajeCompleto,$header);
    //echo "<script>alert('correo enviado exitosamente')</script>";
    //echo "<script> setTimeout(\"location.href='index.php'\",1000)</script>";
    
    $email_set = false;
	$email= '';
	$name_set = false;
	$name = '';
	$comments_set = false;
	$comments = '';
	$phone_set = false;
	$phone = '';
	$message = '';
	$message_res = 'Por favor complete los siguientes campos: ';
	$recipients = array('1247523@senati.pe');
	date_default_timezone_set('America/Bogota');
	$date = date('d/m/Y h:i:s a', time());
	
    if(isset($_POST['nombre']) && $_POST['nombre'] != '') {
		$name = $_POST['nombre'];
		$name_set = true;
	}
	if(isset($_POST['email']) && $_POST['email'] != '') {
		$email = $_POST['email'];
		$email_set = true;
	}
	if(isset($_POST['mensaje']) && $_POST['mensaje'] != '') {
		$mensaje = $_POST['mensaje'];
		$mensaje_set = true;
	}

	if($email_set && $name_set && $mensaje_set) {
		$subject = 'Consulta Web';
		//$message = '<html><body>';
		$message .= "Nombre: " . $name ."\n";
		$message .= "\nEmail: " . $email ;
		$message .= "\nMensaje: \n" . $mensaje ;
		$message .= "\nFecha: \n" . $date ;
		//$message .= '</body></html>';
		
        $header = "Enviado correctamente";
		//$message_plain = 'Si no puedes ver este mensaje correctamente, habilita la vista HTML.';
		
		$res = send_mail($recipients, $name, /*'YMB Industrias - Consulta',*/ $message, $header/*$message_plain*/, $email);
		
		if($res == 'success') {
			//echo '{ "result": "success", "message": "' . $res . '" }';
            echo "<script>alert('correo enviado exitosamente')</script>";
            echo "<script> setTimeout(\"location.href='index.php'\",1000)</script>";
		} else {
			//echo '{ "result": "error", "message": "' . $res . '" }';
            echo "<script>alert('correo enviado exitosamente')</script>";
            echo "<script> setTimeout(\"location.href='index.php'\",1000)</script>";
		}
	} else {
		if(!$name_set) {
			$message_res .= 'Nombre ';
		}
		if(!$email_set) {
			$message_res .= 'Email ';
		}
		if(!$mensaje_set) {
			$message_res .= 'Mensaje ';
		}
		//echo '{ "result": "error", "message": "' . $message_res . '" }';
        
	}
?>