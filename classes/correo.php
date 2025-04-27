<?php
// SAMUEL CEROTE
namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Correo{

    public $email;
    public $nombre;
    public $token;
    public function __construct($nombre, $email, $token)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->token = $token;
    }
    
    
    public function enviarConfirmacion(){ 
        // Verificar que el correo electrónico no esté vacío
        if (empty($this->email)) {
            echo 'Error: El correo electrónico está vacío.';
            return;
        }
    
        // Verificar que el correo electrónico tenga un formato válido
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            echo 'Error: El correo electrónico no es válido: ' . $this->email;
            return;
        }
    
        // CREAR EL OBJETO PHPMailer
        $mail = new PHPMailer();
        
        // Configuración de depuración

        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '3c9b29fae95713';
        $mail->Password = 'b9b7587b3001e9';
    
        // Configurar el remitente
        $mail->setFrom('Cuentas@Encasa.com', 'ENCASA');
    
        // Usar la dirección de correo válida del destinatario
        $mail->addAddress($this->email, $this->nombre);  // Verifica que $this->email no esté vacío
        $mail->Subject = 'Confirma tu cuenta';
    
        // Avisar que es HTML
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
    
        // Crear el contenido del correo
        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . " </strong> Has creado tu cuenta en ENCASA, solo debes confirmarla presionando el siguiente enlace</p>";
        $contenido .= "<p>Presiona aquí: <a href='http://localhost:3001/confirmarcuenta?token=" . $this->token . "'>Confirmar cuenta</a></p>";
        $contenido .= "<p>Si tú no solicitaste esta cuenta, puedes ignorar el mensaje.</p>";
        $contenido .= "</html>";
        $mail->Body = $contenido;
    
        // Intentar enviar el correo
        $mail->send();
       
    }
    
    
    
}