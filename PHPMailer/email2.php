<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
   //$mail->SMTPDebug = 1;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'marriedcouplesmeeting@gmail.com';                     // SMTP username
    $mail->Password   = 'Gmail@1978';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('annual.retreat@canaofgalilee.info' , 'annual.retreat@canaofgalilee.info');
   // $mail->addAddress($email, $HusbandName);     // Add a recipient
    $mail->addAddress('marriedcouplesmeeting@gmail.com');
    $mail->addAddress('youssefmaurice@gmail.com ');
    $mail->addAddress('Rami.Georges@gmail.com  ');
    $mail->addCC('jan.awadallah@gmail.com');
    
    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Retreat new reservation from '.$HusbandName;
    $mail->Body    = '<h3>A new reservation submited by '.$HusbandName. '. <br> <br>Cana of Galilee Married Couples Meeting </h3>';
    $mail->AltBody = 'A new reservation submited by '.$HusbandName;

    $mail->send();
    header("Location:https://canaofgalilee.info");
    //echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}