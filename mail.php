<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Customer´s autoloader
//require 'GRUPOSANISIDRO/PHPMailer/Exception.php';
//require 'GRUPOSANISIDRO/PHPMailer/PHPMailer.php';
//require 'GRUPOSANISIDRO/PHPMailer/SMTP.php';

//Conexion a base de datos
require_once('includes/app.php');
$db = conectar();   

$errores = [];
$nombre = "";
$email = "";
$mensaje = "";
/*function send_mail(){
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $nombre = $_POST["nombre"];
        $email  = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
        $mensaje = $_POST["mensaje"];
        
        if(!$nombre){
            $errores [] = "El Nombre es obligatorio";
        }
        
        if(!$email){
            $errores [] = "El email esta vacio o es invalido";
        }
        
        if(!$mensaje){
            $errores [] = "El Mensaje es obligatorio";
        }
        
        if(empty($errores)){
            //Insertar los registros 
            $query = "INSERT INTO `consulta`(`nombre`, `email`, `consulta`) VALUES ('$nombre','$email','$mensaje')";
            $resultado = mysqli_query(conexion(),$query);
        }
    }     

}*/

require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

function send_mail($recipients, $recipient_name, $subject, $message, $message_plain, $repli_to = null) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = 'smtp-mail.outlook.com';
        $mail->Port = 587;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->SMTPAuth = true;
        $mail->Username = 'aqui va el correo';
        $mail->Password = 'contraseña';
        $mail->setFrom('correo', 'Consultas Web - T .S .I');
        if($repli_to == null) {
            $mail->addReplyTo('correo', 'Consultas Web - T .S .I');
        } else {
            $mail->addReplyTo($repli_to, /*'Ventas Web - YMB Industrias'*/);
        }
            
        foreach($recipients as $recipient) {
            $mail->addAddress($recipient);     // Add a recipient
        }
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->AltBody = $message_plain;
        $mail->isHTML(true);
        if (!$mail->send()) {
            return 'Mailer Error: '. $mail->ErrorInfo;
        } else {
            return 'success';
        }
    } catch (Exception $e) {
            
    }
}
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $nombre = $_POST["nombre"];
        $email  = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
        $mensaje = $_POST["mensaje"];
        
        if(!$nombre){
            $errores [] = "El Nombre es obligatorio";
        }
        
        if(!$email){
            $errores [] = "El email esta vacio o es invalido";
        }
        
        if(!$mensaje){
            $errores [] = "El Mensaje es obligatorio";
        }
        
        if(empty($errores)){
            //Insertar los registros 
            $query = "INSERT INTO `consulta`(`nombre`, `email`, `consulta`) VALUES ('$nombre','$email','$mensaje')";
            $resultado = mysqli_query($db,$query);
        }
    }

?>
