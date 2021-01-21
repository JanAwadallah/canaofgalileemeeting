

<?php
date_default_timezone_set('Australia/Melbourne');
$servername = "31.22.4.141";
$username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_db";




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 


if(isset($_POST['Email']))
{
       $UpdateTable = "update reservation_tbl set Cost='$_POST[Cost]', Paid= '$_POST[Paid]', Outstanding= '$_POST[Outstanding]', PaymentDate='$_POST[PaymentDate]' where ID='$_POST[ID]'";
    $to      = "$_POST[email]";
    // $to      = "jan.awadallah@gmail.com";
    $member = $_POST[HusbandName];
    $subject = "Retreat 2018 reservation";
    $message = "Dear <strong>$_POST[HusbandName]</strong> the beloved member of Cana of Galilee meeting, We would like to remind you that the balance of <strong>$$_POST[Outstanding].00</strong> is still waiting to be paid. Please if you already paid that balance within the last three days, let us know by sending message to annual.retreat@canaofgalilee.info otherwise, please pay that balance ASAP.

<br>All payment should be done online to the following account and confirm your payment by sending email to Rami on rami.georges@gmail.com to let him know.
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
    mail($to, $subject, $message, $headers);
    
    $UpdateTable = "update reservation_tbl set Cost='$_POST[Cost]', Paid= '$_POST[Paid]', Outstanding= '$_POST[Outstanding]', PaymentDate='$_POST[PaymentDate]' where ID='$_POST[ID]'";
  mysqli_query($conn, $UpdateTable);
    header("Location: http://canaofgalilee.info/payments.php");
   
     $sql ="select * from reservation_tbl order by ReservationDate";
  $records = mysqli_query($conn, $sql);



}

if(isset($_POST['Assign']))
{


$UpdateTable = "update reservation_tbl set Cost='$_POST[Cost]', Paid= '$_POST[Paid]', Outstanding= '$_POST[Outstanding]', PaymentDate='$_POST[PaymentDate]' where ID='$_POST[ID]'";
  mysqli_query($conn, $UpdateTable);
    header("Location: http://canaofgalilee.info/payments.php");
   
     $sql ="select * from reservation_tbl order by ReservationDate";
  $records = mysqli_query($conn, $sql);

}


?>