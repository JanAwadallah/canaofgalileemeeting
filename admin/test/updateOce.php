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


 

 $sql ="select * from reservation_tbl order by Outstanding DESC";
  $records = mysqli_query($conn, $sql);


if(isset($_POST["submit"]))
{
    
    
    for ($i = 0; $i <= count($_POST["ID"]); $i++) {
    // echo $_POST["Paid"][$i];
    $OurCost = $_POST["OurCost"][$i];
     $Cost = $_POST["Cost"][$i];  
  $Paid = $_POST["Paid"][$i];
  $Room = $_POST["Room"][$i];
  $Balance = $Cost-$Paid;
$UpdateTable = "update reservation_tbl set OurCost='$OurCost', Cost='$Cost', Paid= '$Paid', Outstanding='$Balance', Room='$Room' where ID='$i'";
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


<!DOCTYPE html>
<html>
	<head>
		<title>Outstanding List</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<br />
		<!--<div  class="container">-->
			<h3 align="center">Outstanding List</h3>
		
		
			
			<div style="position:relative" class="table-responsive">
				<table style=" margin-bottom:100px;" class="table-hover table table-bordered  table-sm">
					<tr>
						<th>Husban Name</th>
						<!--<th>Room Type</th>-->
						<th>OurCost (To Pay)</th>
						<th>Cost ( To Collect) </th>
						<th>Paid</th>
						<th>Balance</th>
						<th>Room No.</th>
						
					
						
					</tr>
					
					<tr></tr>
				
				</div>	
					
			
					
				
 <?php
   while($row = mysqli_fetch_array($records)) 
				{
				    $Balance = $row['Cost'] - $row['Paid'];
				    // $TCost=Cost[];
				    
				     echo "<form  method=post>";
				     echo "<tr>";
    
   
    	
    echo "<td class='data-width'>".$row[ 'HusbandName' ]."</td>";
    // echo "<td>".$row['RoomFirst']."</td>";
    echo "<td><input type=text name='OurCost[".$row['ID']."]' value=' ".$row['OurCost']." '>";
    echo "<td><input type=text name='Cost[".$row['ID']."]' value=' ".$row['Cost']." '>";
    // echo "<td>".$row['Cost']."</td>";
    echo "<td><input type=text name='Paid[".$row['ID']."]' value=' ".$row['Paid']." '>";
    // echo "<td>".$row['Paid']."</td>";
    echo "<td><input type=text name='Outstanding[".$row['ID']."]' value='$Balance '>";
    echo "<td><input style='width:50px' type=number name='Room[".$row['ID']."]' value=' ".$row['Room']." '><p style='margin:5px; padding:5px; display: inline; border:1px solid'>".$row[ 'Room' ]."</h4>";
    echo "<input type=hidden name='ID[]' value=' ".$row['ID']." '>";
    echo "<input  name=email type=hidden value=' ".$row['email']." '>";
    echo"</tr>";
	
				}
	
    



$conn = new mysqli($servername, $username, $password, $dbname);

// $sq = mysql_query("SELECT SUM(value) AS sum FROM  `table` WHERE `q_id` = '2'")or die(mysql_error());

//   while($row = mysql_fetch_assoc($sq))
//   {
//      $sum = $row["sum"];
//   }

//   echo $sum . "<br>";
	echo "<tr>";
	   	echo "<td class='data-width'><h3 class='align-middle'>Total</h3></td>";
	   	
	   					$sql ="select SUM(OurCost) AS sumOC from reservation_tbl ";
  $records = mysqli_query($conn, $sql);
   while($row = mysqli_fetch_array($records)) 
   $sumOC += $row['sumOC'];
   
   				{
   

   	echo "<td class='data-width'><h3 class='align-middle'>$".$sumOC."</h3></td>";
				    

}
				
				$sql ="select SUM(Cost) AS sumC from reservation_tbl ";
  $records = mysqli_query($conn, $sql);
   while($row = mysqli_fetch_array($records)) 
   $sumC += $row['sumC'];
   
   				{
   

   	echo "<td class='data-width'><h3 class='align-middle'>$".$sumC."</h3></td>";
				    

}
   				$sql ="select SUM(Paid) AS sumP  from reservation_tbl ";
  $records = mysqli_query($conn, $sql);
   while($row = mysqli_fetch_array($records)) 

   $sumP += $row['sumP'];

				{
			    
   	echo "<td class='data-width'><h3 class='align-middle'>$".$sumP."</h3></td>";
// echo $sumP. "<br>";

				}	
       				$sql ="select SUM(Outstanding) AS sumO  from reservation_tbl ";
  $records = mysqli_query($conn, $sql);
   while($row = mysqli_fetch_array($records)) 

   $sumO += $row['sumO'];

				{
			    
   	echo "<td class='data-width'><h3 class='align-middle'>$".$sumO."</h3></td>";
   
// echo $sumO. "<br>";

				}
    // echo array_sum(Cost[]) ;

   echo "</tr>";
   echo'<button 
   style="
   margin-bottom:50px;
   position: absolute;
left:    0;
bottom:   0" class="btn btn-lg btn-primary" name=submit type="submit">Submit</button>';
  
   	
   
				 
  
        echo "</form>";
    ?>


</div>	


			
				 






