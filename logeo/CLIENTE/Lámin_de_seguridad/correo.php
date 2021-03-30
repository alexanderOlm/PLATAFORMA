<? php 
use  PHPMailer \ PHPMailer \ PHPMailer ;
use  PHPMailer \ PHPMailer \ Exception ;

requiere  'phpmailer/Exception.php' ;
requiere  'phpmailer/PHPMailer.php' ;
requiere  'phpmailer/SMTP.php' ;


$mail = new PHPMailer(true);

try {
      $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                )
            );
    //Server settings
    $mail->SMTPDebug =0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                   //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dennisalexander11770@gmail.com';       //SMTP username
    $mail->Password   = '0979571120DEN';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('dennisalexander11770@gmail.com', 'Empresa Scar tunnig');
    $mail->addAddress('yinyer1122@gmail.com') 'VENTA DE PRODUCTOS';    //Add a recipient
   

    //Attachments
   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Informacion de Scar tunnig';
    $mail->Body    = 'Hola se envio correo de informacion <b>in bold!</b>';
    $mail->AltBody = 'CODE PE SUSCRIBETE';

    $mail->send();
    echo 'El correo se envio';
} catch (Exception $e) {
    echo "erro de envio de correo: {$mail->ErrorInfo}";
}