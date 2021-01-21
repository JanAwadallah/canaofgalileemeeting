<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Cana Of Galilee</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
    <link href="css/mdb.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Material Design Bootstrap -->
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Start your project here-->
    <div class="container-fluid p-2">
      <nav class="navbar navbar-expand-lg  navbar-dark bg-dark" style="border-radius: 5px; border-bottom: 5px solid rbg(219,219,219);">
        <a class="navbar-brand animated slower bounceInLeft" href="#"><img id="logo" src="ChurchIcon2.png"><strong>Cana Of Galilee</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
          <span>Menu</span><span class="navbar-toggler-icon"></span>
        </button>
	

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="width: 100%;">

          <ul class="navbar-nav mr-auto w-100 justify-content-end">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="events.php">Events</a>
            </li>
           
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">Retreat Registration</a>
              <div class="dropdown-menu">
                <a charset="dropdown-item" href="registeration.html">Registeration</a>
                <a charset="dropdown-item" href="VisitorRegistration.html">Visitor Registeration</a>
                </div>
            </li>        
          </ul>
          <!-- <a class=" mr-auto" href="#"><img src="LikeUsOnFacebook_Icon.png" style="width: 40%; height: 60%; float: right;"></a> -->
        
        </div>

        
      </nav>
      
       

<?php
/* Database connection start */
$servername = "sv55.ifastnet4.org";
$username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_events";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$sql = "SELECT * FROM  images";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$image_count = 0;
$button_html = '';		
$slider_html = '';	
while( $rows = mysqli_fetch_assoc($resultset)){	
	$active_class = "";			
	if(!$image_count) {
		$active_class = 'active';					
		$image_count = 1;
	}	
	$image_count++;
	$thumb_image = "nature_thumb_".$rows['id'].".jpg";	
	// slider image html
	$slider_html.= "<div class='carousel-item ".$active_class."'>";
    $slider_html.= "<img src='img/".$rows['image']."' alt='1.jpg' class='d-block rounded z-depth'>";
    
    $slider_html.= "<div class='carousel-caption d-none d-md-block'><h5>".$rows['Caption']."</h5></div></div>";
    // Thumbnail html
	// Button html
	$button_html.= "<li data-target='#carousel-example-generic' data-slide-to='".$image_count."' class='".$active_class."'></li>";
}
?>




<div style="max-width: 60%; margin: 20% auto;" class="card">
<div class="center row">

    <div class="col-12 col-md-6 col-sm-12 col-lg-6">
        <a class="icons align-middle" href="registeration.html"><img class="icons" src="img\2019RetreatRegist.png"></a>
    </div>
    <div class="col-12 col-md-6 col-sm-12 col-lg-3">
        <a class="icons align-middle" href="VisitorRegistration.html"><img class="icons" src="img\2019VisitorRegist.png"></a>
    </div>

    </div>

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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity
</body>

</html>
