 <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <link href="https://fonts.googleapis.com/css?family=Modak" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php
date_default_timezone_set('Australia/Melbourne');
$Member_id = filter_input(INPUT_POST, 'Member_id');
$fullName = filter_input(INPUT_POST, 'fullName');
$address = filter_input(INPUT_POST, 'address');
$phone = filter_input(INPUT_POST, 'phone');
$Size = filter_input(INPUT_POST, 'Size');
$choice = filter_input(INPUT_POST, 'choice');
$updated = date("d/M/Y G:i:s");
$servername = "localhost";
$username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_Liturgy";

// Create connection

// $conn = mysqli_connect($servername, $username, $password, $dbname);
// if(!conn){
//     die("connection failed : ".mysqli_connect_error());
// }
//     $sql = "SELECT * FROM Members WHERE choice = '$choice' ";
// $results = mysqli_query($conn,$sql);
// $datas=array();
// if(mysqli_num_rows($results)>0){
//     while ($row= mysqli_fetch_assoc($results)){
//         $datas[]=$row;
        
//     }
// }

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!conn){
    die("connection failed : ".mysqli_connect_error());
}
    $sql = "SELECT * FROM Members WHERE choice = 'StGeorgeChurch' ";
$results = mysqli_query($conn,$sql);
$datas=array();
if(mysqli_num_rows($results)>0){
    while ($row= mysqli_fetch_assoc($results)){
        $datas[]=$row;
        
    }
}
// print_r($datas);
$total=0;
foreach($datas as $data){
    $newTotal =$total += $data[Size];
    // echo $newTotal;
}
$currentTotal = 20 -$newTotal;
if ($Size>5){
$message = "wrong answer";
echo "<script type='text/javascript'>alert('$message');</script>";
}else{

if ($Size<$currentTotal){
    $sql = "INSERT INTO `Members`(fullName, phone, Size,choice) 
 VALUES ('$fullName', '$phone', '$Size', '$Group_id')"; 
 header("Location: http://canaofgalilee.info/liturgy/sucsses.html");

}else{

// }
// if ($conn->query($sql) === TRUE) {

header("Location: http://canaofgalilee.info/liturgy/error.html");
}
}
// }else {
//      echo "<div style='text-align: center;' class='jumbotron'><h3>Please go back and check yor details</h3></div>" . $sql . "<br>" . $conn->error;
// }

$conn->close();
?>