

<?php

$HusbandName = filter_input(INPUT_POST, 'Husband');
$email = filter_input(INPUT_POST, 'Email');
$WifeName = filter_input(INPUT_POST, 'Wife');
$KidsNumber = filter_input(INPUT_POST, 'Kids');
$Phone = filter_input(INPUT_POST, 'Phone');
$updated = date("d/M/Y");
$servername = "31.22.4.141";
$username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_visitors_DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO visitors (Husband, Email, Wife, Kids, Phone, RegisterDate)
VALUES ('$HusbandName','$email', '$WifeName', '$KidsNumber', '$Phone', '$updated')";

if ($conn->query($sql) === TRUE) {
    $to      = "jan.awadallah@gmail.com, youssefmaurice@gmail.com, ".$email;
    $subject = "2018 Retreat Visitor New Reservation from $HusbandName ($email)";
    $message = "Visitor Reservation expression of interest was received,\n please wait for a registration confirmation subject to availability";
    $message = wordwrap($message,70);
      $headers = "From: annual.retreat@canaofgalilee.info" . "\r\n" .
    $headers .= "Reply-To: annual.retreat@canaofgalilee.info" . "\r\n" .
    $headers .= "X-Mailer: PHP/" . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1\n";
    mail($to, $subject, $message, $headers);


	
  header("Location: http://canaofgalilee.info/index.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>