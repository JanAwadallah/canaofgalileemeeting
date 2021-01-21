

<?php
$servername = "31.22.4.141";
$username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_visitors_DB";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 


if(isset($_POST['Assign']))
// {
   
//     $to      = "jan.awadallah@gmail.com";
//     $subject = "visitor registration".$_POST[Email];
//     $message = "Visitor registration approved";
//     $headers = "From: annual.retreat@canaofgalilee.info" . "\r\n" .
//     $headers .= "Reply-To: annual.retreat@canaofgalilee.info" . "\r\n" .
//     $headers .= "X-Mailer: PHP/" . phpversion();
//     $headers .= "MIME-Version: 1.0\r\n";
//     $headers .= "Content-Type: text/html; charset=iso-8859-1\n";
// // ini_set("SMTP","mail.canaofgalilee.info");
// // ini_set("smtp_port","587");
//     mail($to, $subject, $message, $headers);

// $UpdateTable = "update visitors set Approved='Yes' where ID='$_POST[ID]'";
//   mysqli_query($conn, $UpdateTable);
//     // header("Location: http://canaofgalilee.info/reservationDB.php");
//     header("Location: http://canaofgalilee.info/VisitorsDB.php");
   
//      $sql ="select * from reservation_tbl order by ReservationDate";
//   $records = mysqli_query($conn, $sql);

// }
// if(isset($_POST['Assign']))
{
    // $_POST[email]
   
    $to      = "$_POST[Email]";
    $member = $_POST[Husband];
    $subject = "visitor registration".$_POST[Email];
    $message = "Dear <strong>$_POST[Husband]</strong>, the beloved member of Cana of Galilee meeting, We would like to inform you that your Visitor registration for attending our event <strong>Beyond The Border(The Annual Retreat)</strong> has been approved and your visitor admission fee  is awaiting  to be paid off.
 
<br>So please find the information below to complete your registration and secure your place with us in this blessed event by paying $35 to the following account and confirm your payment by sending email to Rami on rami.georges@gmail.com to let him know.
<br>
<br>Account Name: RAMI GEORGES
 <br>
<br>BSB: 733695     Account #: 636600
 <br>
<br>Description: 'Please write your name'
<br>
<br>Please remember the service in your prayers
";
$Room = $_POST[Room];
$Room = str_replace(' ', '', $Room);
    $message = wordwrap($message,70);
    $headers = "From: annual.retreat@canaofgalilee.info" . "\r\n" .
    $headers .= "Reply-To: annual.retreat@canaofgalilee.info" . "\r\n" .
    $headers .= "X-Mailer: PHP/" . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1\n";
// ini_set("SMTP","mail.canaofgalilee.info");
// ini_set("smtp_port","587");
    mail($to, $subject, $message, $headers);

$UpdateTable = "update visitors set Approved='Yes' where ID='$_POST[ID]'";
  mysqli_query($conn, $UpdateTable);
    // header("Location: http://canaofgalilee.info/reservationDB.php");
    header("Location: http://canaofgalilee.info/VisitorsDB.php");
   
     $sql ="select * from visitors";
  $records = mysqli_query($conn, $sql);

}

?>