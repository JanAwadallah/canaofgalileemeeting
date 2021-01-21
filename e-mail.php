

<?php
$HusbandName = $_POST[HusbandName];
$email = $_POST[email];
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
 


if(isset($_POST['button_pressed']))
{
// include 'PHPMailer/email3.php';
   
$UpdateTable = "update reservation_tbl set Approved='Yes' where ID=$_POST[ID]";
  mysqli_query($conn, $UpdateTable);
    // header("Location: http://canaofgalilee.info/reservationDB.php");
    // header("Location: http://canaofgalilee.info/reservationDB.php");
   
     $sql ="select * from reservation_tbl order by ReservationDate";
  $records = mysqli_query($conn, $sql);



$UpdateTable = "update reservation_tbl set Cost='$_POST[Cost]', Paid= '$_POST[Paid]', Outstanding='$_POST[Cost]'-'$_POST[Paid]' where ID='$_POST[ID]'";
  mysqli_query($conn, $UpdateTable);
    header("Location: http://canaofgalilee.info/reservationDB.php");
    // header("Location: http://canaofgalilee.info/accepted.php");
   
     $sql ="select * from reservation_tbl order by ReservationDate";
  $records = mysqli_query($conn, $sql);

}

?>