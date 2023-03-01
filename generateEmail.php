<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require __DIR__.'/PHPMailer/src/Exception.php';
require __DIR__.'/PHPMailer/src/PHPMailer.php';
require __DIR__.'/PHPMailer/src/SMTP.php';


function sendMsg($odosielatel, $predmet, $sprava){

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();                                            
        $mail->isHTML(true);  
        $mail->Host       = 'smtp.seznam.cz';                   
        $mail->SMTPAuth   = true;                                  
        $mail->Username   = 'stayfit2@seznam.cz';                    
        $mail->Password   = '@StayFit25603';                             
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
        $mail->Port       = 465;                                    
        $mail->CharSet    = "UTF-8";
        $mail->setFrom('stayfit2@seznam.cz', 'StayFit');
        $mail->addAddress('m.kockar23@gmail.com');    
        $mail->addReplyTo($odosielatel, 'Zakaznik');
        $mail->Subject = $predmet;
        $mail->Body    = $sprava;
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

function sendOrder($odosielatel, $predmet, $sprava){

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();                                            
        $mail->isHTML(true);  
        $mail->Host       = 'smtp.seznam.cz';                   
        $mail->SMTPAuth   = true;                                  
        $mail->Username   = 'stayfit2@seznam.cz';                    
        $mail->Password   = '@StayFit25603';                             
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
        $mail->Port       = 465;                                    
        $mail->CharSet    = "UTF-8";
        $mail->setFrom('stayfit2@seznam.cz', 'Potvrdenie objednávky');
        $mail->addAddress('m.kockar23@gmail.com');    
        $mail->addAddress($odosielatel); 
        $mail->Subject = $predmet;
        $mail->Body    = $sprava;
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
