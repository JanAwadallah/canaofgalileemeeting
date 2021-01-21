 <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <link href="https://fonts.googleapis.com/css?family=Modak" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php
date_default_timezone_set('Australia/Melbourne');

$HusbandName = filter_input(INPUT_POST, 'HusbandName');
$email = filter_input(INPUT_POST, 'e-mail');
$Phone = filter_input(INPUT_POST, 'Phone');
$WifeName = filter_input(INPUT_POST, 'WifeName');
$KidsNumber = filter_input(INPUT_POST, 'KidsNumber');
$RoomFirst = filter_input(INPUT_POST, 'RoomFirst');
$RoomFirst=str_replace(' ', '-', $RoomFirst);
$updated = date("d/M/Y G:i:s");
$servername = "localhost";
$username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_retreat2019_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$selectFirstQuery = "SELECT * FROM reservation_tbl WHERE email = '$email'";
$queryResult = $conn->query($selectFirstQuery);
$foundRows = mysqli_num_rows($queryResult);
// Check connection
if($foundRows >= 1) {
    echo "<div style='text-align: center;' class='jumbotron'><h2>$email is already registerd, please wait for the confirmation email and check your spam folder if you did not receive any email</h2></div>";
    
}else{
 $sql = "INSERT INTO reservation_tbl (HusbandName, email, Phone, WifeName, KidsNumber, RoomFirst, ReservationDate)
VALUES ('$HusbandName','$email', '$Phone', '$WifeName', '$KidsNumber', '$RoomFirst',  '$updated')";}

if ($conn->query($sql) === TRUE) {

	include 'PHPMailer/e-mail.php';
// 	include 'PHPMailer/email2.php';

  
}else {
    echo "<div style='text-align: center;' class='jumbotron'><h3>Please go back and check yor details</h3></div>" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>