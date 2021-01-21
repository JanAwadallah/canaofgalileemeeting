<?php
 include 'header.php';
 ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liturgy Registration</title>
    <link href="form.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<body>
    


   
<div class="container">
   <div id="jumbo" class="jumbotron jumbotron-fluid">

      <h1 style="text-align:center;"> تسجيل حضور قداس يوم السبت ٠٦-٠٦-٢٠٢٠</h1>

  </div>
<?php
$HusbandName = $_POST[HusbandName];
$email = $_POST[email];
$Phone = filter_input(INPUT_POST, 'Phone');
$WifeName = filter_input(INPUT_POST, 'WifeName');
$KidsNumber = filter_input(INPUT_POST, 'KidsNumber');
$RoomFirst = filter_input(INPUT_POST, 'RoomFirst');
$RoomFirst=str_replace(' ', '-', $RoomFirst);
$updated = date("d/M/Y G:i:s");
$Cost = $_POST[Cost];
$Paid = $_POST[Paid];
$Balance = $Cost - $Paid;
$spots=20;


 $servername = "localhost";
 $username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_Liturgy";



//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);




$selectQuery1 = "SELECT * FROM Members WHERE choice = 'StGeorgeChurch' ";
$queryResult1 = $conn->query($selectQuery1);
$foundRows1 = mysqli_num_rows($queryResult1);
$StGeorgeSpots = 20 -$foundRows1;

$selectQuery2 = "SELECT * FROM Members WHERE choice = 'StTheodoreChurch' ";
$queryResult2 = $conn->query($selectQuery2);
$foundRows2 = mysqli_num_rows($queryResult2);
$StTheodoreSpots = 20 -$foundRows2;

$selectQuery3 = "SELECT * FROM Members WHERE choice = 'Hall' ";
$queryResult2 = $conn->query($selectQuery2);
$foundRows2 = mysqli_num_rows($queryResult2);
$HallSpots = 20 -$foundRows2;


echo '
<div>
  <form class="needs-validation" form method="post" action="New_Connect.php">
    <div class="row float-right">
      <div class="form-row"> 
      <div>
        <ul style="  list-style-type:none;">
          <li>
            <div class="col-12 col-md-6 boundry">
              <label class="float-right"><strong> الاسم بالكامل</strong></label>
              <input name="fullName" type="text" class="form-control"  placeholder="الاسم بالكامل"  required>
            </div>
          </li>
          <li>
           <div class="col-12 col-md-6 boundry">
            <label class="float-right"><strong> رقم الهاتف</strong></label>
            <input name="phone" type="text" class="form-control"  placeholder="رقم الهاتف"  required>
           </div>
          </li>
          <li>
            <div class="col-12 col-md-6 boundry">
              <label class="float-right"><strong>عدد أفراد الاسرة</strong></label>
              <input name="Size" type="number" min="0" class="form-control"  placeholder="عدد أفراد الاسرة"  required>
            </div>
          </li>
          <li>
           <div>
             <p class="float-right"><strong>مكان حضور القداس</strong></p>
           </div>
         </li>
         <div>  
          <input type="radio" name="choice" value="StGeorgeChurch">
          <label>كنيسة مارجرجس</label><p style="display:inline;">     >>>>>>  Available spots : '.$StGeorgeSpots.'</p>
         </div>
      <div>
        <input type="radio" name="choice" value="StTheodoreChurch">
        <label>كنيسة الامير تادرس</label><p style="display:inline;">     >>>>>>  Available spots :  '.$StTheodoreSpots.'</p>
      </div>    
      <div>
        <input type="radio" name="choice" value="Hall">
        <label>قاعة مارجرجس</label><p style="display:inline;">     >>>>>>  Available spots :  '.$HallSpots.'</p>
      </div>
    </ul>
    </div>
     
  <div><button class="btn btn-primary" type="submit">   سجل</button></div>

    </div>
    </div>


    </form>
    


';


                    
                     ?>




</div>






      

  

  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
</body>

</html>
