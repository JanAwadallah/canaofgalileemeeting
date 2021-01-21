<div class="div" class="container">
  <div id="jumbo" class="jumbotron jumbotron-fluid">
    <div class="container">
        <a href="http://canaofgalilee.info/Admin.html"><img style="width: 150px; height: 60px; float: left;" src="2018Retreat/images\go-back-button2.png"></a>
      <div id="pageTitle">
	       <h2 id="h2" style="display: inline;">Rooms filter report </h2>
      </div><br>
    </div>
  </div>



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
    
     <select name='Type'>
         
         <option value="">All - No filter</option>
    <option value="One bedroom Apartment (garden view) - $380">One bedroom Apartment (garden view) - $380</option>
    <option value="One bedroom Apartment (ocean view)  - $440">One bedroom Apartment (ocean view)  - $440</option>
    <option value="Two Bedroom Apartment - $570">Two Bedroom Apartment - $570</option>

    <option value="Outstanding">Outstanding</option>
</select>
    <button type="submit">Filter</button>
</form>

<?php
$Report = $_POST['Type'];
$Report=str_replace(' ', '-', $Report);

 if ($Report === "Outstanding") {
    
    $filter = "where Outstanding > 0";
}else if ($Report != '' || $Report != Null ) {
    $Reported =$Report;
    $filter = "where AcceptedChoice= '$Reported'";
}else{
$filter = '';
$Reported=str_replace(' ', '-', $Reported);
}

$RoomTypes = ["One-bedroom-Apartment-(garden-view)---$380", "One-bedroom-Apartment-(ocean-view)----$440", "Two-Bedroom-Apartment---$570"];
for ($x = 0; $x < 7 ; $x++) {
    $Report = $_POST['Type'];
$Report=str_replace(' ', '-', $Report);
// echo $RoomTypes[$x];
if ( $RoomTypes[$x] = $Report) {
    $Reported =$Report;

}else{
$Reported = "None";

}
} 
    
    
    

$servername = "localhost";
$username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_retreat2019_db";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

 
 

 $sql ="select * from reservation_tbl $filter order by Outstanding desc";
  $records = mysqli_query($conn, $sql);

?>





<div class="table-responsive">
<table style="width: 100%;" class="table table-hover">
  <thead>
    <tr>
      
      <th>Husband's Name</th>
      <th>Wife's Name</th>
      <th>AcceptedChoice</th>
      <!--<th>Share With</th>-->
      <th>Room#</th>
      <th>Outstanding $$</th>
      
      
    </tr>
  </thead>
  
  <tbody>

  
 <?php
   while($row = mysqli_fetch_array($records)) 

   {

    echo "<tr>";
    
    
    
    echo "<td> ".$row[ 'HusbandName' ]." </td>";
    echo "<td> ".$row[ 'WifeName' ]." </td>";
    echo "<td> ".$row[ 'AcceptedChoice' ]." </td>";
    // echo "<td> ".$row[ 'ShareWith' ]." </td>";
    echo "<td><input type=text name=Room value=' ".$row['Room']." '>";
    echo "<td><input type=text name=Outstanding value=' ".$row['Outstanding']." '>";
    echo "<td><input type=hidden name=ID value=' ".$row['ID']." '>";
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


