<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'marriedcouplesmeeting@gmail.com';                     // SMTP username
    $mail->Password   = 'Gmail@1978';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('annual.retreat@canaofgalilee.info' , 'annual.retreat@canaofgalilee.info');
    $mail->addAddress($email, $HusbandName);     // Add a recipient
    //$mail->addAddress('marriedcouplesmeeting@gmail.com');
    //$mail->addAddress('youssefmaurice@gmail.com ');
    //$mail->addAddress('Rami.Georges@gmail.com  ');
    //$mail->addCC('jan.awadallah@gmail.com');
    
    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = '2019 Retreat reservation';
    $mail->Body    = "Dear <strong> $_POST[HusbandName] </strong> the beloved member of Cana of Galilee meeting, We would like to inform you that your expression of interest (EOI) for attending our event <strong>Fully Alive(The Annual Retreat)</strong> has been approved and your booking is ready now to be paid.
 
<br>So please find the information below to complete your reservation and secure your place with us in this blessed event by paying at least 50% deposit of the total accommodation cost.
 
<br>Please be aware that if you only paid the 50% deposit then the balance must be paid in full by 01/09/2019.
 <br>
<br>Member name : <strong> $_POST[HusbandName] </strong>
 <br>
<br>Room type: <strong>$_POST[AcceptedChoice]</strong>
 <br>
 
<br>All payment should be done online to the following account and confirm your payment by sending email to Rami on rami.georges@gmail.com to let him know.
<br>
<br>Account Name: RAMI GEORGES
 <br>
<br>BSB: 733695     Account #: 636600
 <br>
<br>Description: 'Please write your name'
<br>
<br>Please remember the service in your prayers";
    // $mail->AltBody = 'Your reservation expression of interest was received, please wait for a reservation confirmation subject to availability. Cana of Galilee Married Couples Meeting.';

    $mail->send();
    header("Location: http://canaofgalilee.info/reservationDB.php");
    //echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}