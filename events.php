

<?php
 include 'header.php';
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
    $slider_html.= "<img src='img/".$rows['image']."' alt='1.jpg' class='d-block'>";
    
    $slider_html.= "<div class='carousel-caption d-none d-md-block'><h5>".$rows['Caption']."</h5></div></div>";
    // Thumbnail html
	// Button html
	$button_html.= "<li data-target='#carousel-example-generic' data-slide-to='".$image_count."' class='".$active_class."'></li>";
}
?>



<div class="container-fluid p-2">	
		
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >	  
		<ol class="carousel-indicators">
		<?php echo $button_html; ?>		
		</ol>	  
		<div class="carousel-inner">	  
			<?php echo $slider_html; ?>
		</div>
		  <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>	 
		<ul class="thumbnails-carousel clearfix">
			<?php echo $thumb_html; ?>
		</ul>
	</div>	

</div>

      <div class="container-fluid">
        <div class="jumbotron  mt-3 text-center">
          <h1><i class="fas fa-calendar-alt"></i> Upcoming Events</h1>
          <hr style="max-width: 90%;">

        </div>
        
    <div class="container">

         <?php
$servername = "sv55.ifastnet4.org";
$username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_events";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
$sql = "SELECT * FROM  events";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
   while($row = mysqli_fetch_array($resultset)) 

   {
        
        echo "<div class='row'>";
             echo "<div class='col p-2'>";
                 echo "<div class='card text-center'>";
                     echo "<div class='card-header'><h4>".$row[ 'title' ]."</h4></div>";
                     echo "<div class='card-body'>";
                         echo "<h6 class='card-title'><strong>When</strong>  ".$row[ 'whenDate' ]." @ ".$row[ 'whenTime' ].
                         "<br><strong> Where </strong>" .$row[ 'whereAddress' ].
                         "</h6>";
                         echo "<h5 class='card-title'>".$row[ 'eventText' ]."</h5>";
                     echo "</div>";
                echo "</div>";
          echo "</div>";
          echo "</div>";
          
   }
   ?>


</div>





  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="js/carousel-slider.js"></script>
</body>
</html>
