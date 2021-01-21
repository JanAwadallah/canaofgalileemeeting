<?php
$servername = "localhost";
$username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_retreat2019_db";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
if(isset($_POST["submit"]))
{
    
    
    for ($i = 0; $i <= count($_POST["ID"]); $i++) {
    // echo $_POST["Paid"][$i];
     $Cost = $_POST["Cost"][$i];  
  $Paid = $_POST["Paid"][$i];
  $Room = $_POST["Room"][$i];
  $Balance = $Cost-$Paid;
$UpdateTable = "update reservation_tbl set Cost='$Cost', Paid= '$Paid', Outstanding='$Balance' where ID='$i'";
  mysqli_query($conn, $UpdateTable);
    header("Location: http://canaofgalilee.info/admin/test/updateOce.php");

   
}


//   print_r ($_POST);
// foreach($_POST["ID"] AS $id){
  
//   $Cost = $_POST["Cost"][$id];  
//   $Paid = $_POST["Paid"][$id];
//   $Room = $_POST["Room"][$id];

// echo $id["Cost"];

// $update = "UPDATE `reservation_tbl` SET `Room`='$Room',`Cost`='$Cost',`Paid`='$Paid' WHERE ID=$id";
}


// header("Location: http://canaofgalilee.info/admin/test/updateOce.php");

?>