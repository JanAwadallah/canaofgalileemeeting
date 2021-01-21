<?php
//send_mail.php

if(isset($_POST['email_data']))
{
	require 'class/class.phpmailer.php';
	$output = '';
	foreach($_POST['email_data'] as $row)
	{
		$mail = new PHPMailer;
		$mail->IsSMTP();								//Sets Mailer to send message using SMTP
		$mail->Host = 'smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
									//Sets the default SMTP server port
		$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
		$mail->Username = 'marriedcouplesmeeting@gmail.com';					//Sets SMTP username
		$mail->Password = 'Gmail@1978';					//Sets SMTP password
		$mail->SMTPSecure = 'ssl'; 
		$mail->Port       = 465; 
	//	$mail->SMTPSecure = '';							//Sets connection prefix. Options are "", "ssl" or "tls"
		$mail->From = 'annual.retreat@canaofgalilee.info';			//Sets the From email address for the message
		$mail->FromName = 'Cana of Galilee';					//Sets the From name of the message
		$mail->AddAddress($row["email"], $row["name"]);	//Adds a "To" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML
		$mail->Subject = 'Annual Retreat final payment'; //Sets the Subject of the message
		//An HTML or plain text message body
		$mail->Body = '
		Dear  <strong> '.$row["name"].' </strong> the beloved member of Cana of Galilee meeting, We would like to inform you that the final payment for your accomodation at the <strong>Fully Alive(The Annual Retreat)</strong> is now due and <strong> MUST be paid by 20/10/2019</strong>.
 
<br>So, if you have not already done so, please find the information below to finalize your reservation and secure your place with us in this blessed event by paying balance of the total accommodation cost.
 
 <br>
<br>Member name : <strong> '.$row["name"].' </strong>
 <br>
<br>Room type: <strong>'.$row["room"].'</strong>
 <br>
 
<br>All payment should be done online to the following account and confirm your payment by sending email to Rami on rami.georges@gmail.com to let him know.
<br>
<br>Account Name: RAMI GEORGES
 <br>
<br>BSB: 733695     Account #: 636600
 <br>
<br>Description: "Please write your name"
<br>
<br>Please remember the service in your prayers';

		$mail->AltBody = '';

		$result = $mail->Send();						//Send an Email. Return true on success or false on error

		if($result["code"] == '400')
		{
			$output .= html_entity_decode($result['full_error']);
		}

	}
	if($output == '')
	{
		echo 'ok';
	}
	else
	{
		echo $output;
	}
}

?>