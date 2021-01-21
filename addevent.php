         <?php
         $servername = "31.22.4.141";
$username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_events";
$title1 = $_POST['title'];
$title = addslashes($title1);
$whenDate1 = $_POST['whenDate'];
$whenDate = addslashes($whenDate1);
$whenTime1 = $_POST['whenTime'];
$whenTime = addslashes($whenTime1);
$whereAddress1 = $_POST['whereAddress'];
$whereAddress = addslashes($whereAddress1);
$eventText1 = $_POST['eventText'];
$eventText = addslashes($eventText1);


$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

$sql = "INSERT INTO `events`(`title`, `whenDate`, `whenTime`, `whereAddress`, `eventText`) VALUES ('$title','$whenDate','$whenTime','$whereAddress','$eventText');";
mysqli_query($conn, $sql);
header("Location: newevent.php");

   ?>