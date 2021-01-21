<!--<div class="div" class="container">-->
<!--  <div id="jumbo" class="jumbotron jumbotron-fluid">-->
<!--    <div class="container">-->
<!--        <a href="http://canaofgalilee.info/Admin.html"><img style="width: 150px; height: 60px; float: left;" src="2018Retreat/images\go-back-button2.png"></a>-->
<!--      <div id="pageTitle">-->
<!--	       <h2 id="h2" style="display: inline;">Rooms filter report </h2>-->
<!--      </div><br>-->
<!--    </div>-->
<!--  </div>-->



<div class="container">

<html>
<head>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <link href="https://fonts.googleapis.com/css?family=Modak" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">




<title>Reports</title>
</head>
<body>
    
    


<form method="post" action="Reports.php">
    
     <select name='Event'>
         
         <option name="filter1" value="">Choose Event</option>
    <option value="Sat. Mass">Saturday Mass</option>
    <option value="Sun.Mass">Sunday Mass</option>

</select>
     <select name='Date'>
         
         <option name="filter1" value="">Choose Date</option>
    <option value="06-06-2020">06-06-2020</option>
    <option value="13-06-2020">13-06-2020</option>

</select>
     <select name='Time'>
         
         <option name="filter1" value="">Choose Time</option>
    <option value="07:00">07:00</option>
    <option value="09:00">09:00</option>

</select>
    <button type="submit">Filter</button>
</form>

<?php
$Event = $_POST['Event'];
$Date = $_POST['Date'];
$Time = $_POST['Time'];

 if ($Event != '' || $Event != Null ) {
//     $Reported =$Report;
    $filter = "where EventType= '$Event' AND date = '$Date' AND time = '$Time' AND Size > 0";

}else{
$filter = "where Size > 0";
}
// $RoomTypes = ["One-bedroom-Apartment-(garden-view)---$380", "One-bedroom-Apartment-(ocean-view)----$440", "Two-Bedroom-Apartment---$570"];
// for ($x = 0; $x < 2 ; $x++) {
//     $Report = $_POST['Type'];
// // echo $RoomTypes[$x];
// if ( $RoomTypes[$x] = $Report) {
//     $Reported =$Report;

// }else{
// $Reported = "None";

// }
// } 
    
    
    

$servername = "localhost";
$username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_Liturgy";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

 
 

 $sql ="select * from Members $filter ";
  $records = mysqli_query($conn, $sql);

?>





<div class="table-responsive">
<table style="width: 100%;" class="table table-hover">
  <thead>
    <tr>
      
      <th>Full Name</th>
      <th>Phone number</th>
      <th>Number of family</th>
      <th>Event Type</th>
      <th>Date</th>
      <th>Time</th>
    </tr>
  </thead>
  
  <tbody>

  
 <?php
   while($row = mysqli_fetch_array($records)) 

   {

    echo "<tr>";
    
    
    
    echo "<td> ".$row[ 'fullName' ]." </td>";
    echo "<td> ".$row[ 'phone' ]." </td>";
    echo "<td> ".$row[ 'Size' ]." </td>";
    echo "<td> ".$row[ 'EventType' ]." </td>";
    echo "<td> ".$row[ 'date' ]." </td>";
    echo "<td> ".$row[ 'time' ]." </td>";


    // echo "<td> ".$row[ 'ShareWith' ]." </td>";
    // echo "<td><input type=text name=Room value=' ".$row['Room']." '>";
    // echo "<td><input type=text name=Outstanding value=' ".$row['Outstanding']." '>";
    echo "<td><input type=hidden name=Member_id value=' ".$row['ID']." '>";
    echo "</tr>";
    
    }
echo "Filtered for <strong> $Reported </strong>";

 
    if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo "<div>Total $rowcount</div>";
  // Free result set
//   mysqli_free_result($result);
  }
  ?>
  </tbody>
  </table>
 <div id='wrap'>
 </div>
  



</div>
</div>

</body>
</html>


