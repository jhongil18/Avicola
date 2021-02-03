<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// SMTP necesita horas precisas y la zona horaria de PHP debe estar configurada
date_default_timezone_set('Etc/UTC');

require '../librerias/PHPMailer-master/src/Exception.php';
require '../librerias/PHPMailer-master/src/PHPMailer.php';
require '../librerias/PHPMailer-master/src/SMTP.php';

class envioForm{
    function __construct(){
        $funcion = $_REQUEST['FUNCION'];
        $this -> $funcion();
    }

    public function enviar(){
        try{
            $nombres = filter_input(INPUT_POST,"nombres",FILTER_SANITIZE_STRING);
            $apellidos = filter_input(INPUT_POST,"apellidos",FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_STRING);
            $telefono = filter_input(INPUT_POST,"telefono",FILTER_SANITIZE_STRING);
            $descripcion = filter_input(INPUT_POST,"descripcion",FILTER_SANITIZE_STRING);

            $mail = new PHPMailer();
            $mail->isSMTP();    //PHPMailer necesita usar SMTP
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->Host = 'smtp.gmail.com';    //Establecer el nombre de host del servidor de correo
            $mail->Port = 25;
            $mail->SMTPAuth = true;
            $mail->Username = 'jhongil.983@gmail.com';    //Nombre de usuario que se utilizará para la autenticación SMTP
            $mail->Password = 'Pusa2207';    //Contraseña que se utilizará para la autenticación SMTP
            
            $mail->setFrom($email, $nombres." ".$apellidos);    //Establecer de quién se enviará el mensaje
            $mail->addAddress('jhongil.983@gmail.com', 'Avicola');    //Establecer a donde se enviará el mensaje
            
            $mail->isHTML(true);
            $mail->CharSet="UTF-8";
            $mail->Subject = 'Solicitud información pagina web Avicola';    //Asunto del mensaje
            $mail->Body = "<h2>Información de Contacto</h2><br><b>Correo:</b> ".$email."<br><b>Telefono:</b> ".$telefono."<p><br><b>Descripción: </b> ".$descripcion."</p>";    //Mensaje a enviar

            if (!$mail->send()) {
            echo json_encode('Error de envio: ') . $mail->ErrorInfo;
            }else {
            echo json_encode(1);
            }
            
        }catch(Exception $ex){
			echo "Ha sucedido el siguiente error: ".$ex->getMessage();
		}
    }
}
$envioForm = new envioForm();
?>