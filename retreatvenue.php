<?php
include 'header.php';
?>
       

<?php
/* Database connection start */
$servername = "localhost";
$username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_retreat2019_db";
$conn = new mysqli($servername, $username, $password, $dbname);

// $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
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
<button class="btn btn-primary" onclick="goBack()">Go Back</button>


<style>
           
            * {
                margin: 0;
                padding: 0;
            }
            
            .info {
                display: block;
                position: relative;
                font-family: Arial;
                width: 40%;
                padding: 20px 0;
                margin: 0 auto 30px;
                color: #000;
                font-size: 20px;
                text-decoration: none;
                text-align: center;
                text-transform: uppercase;
                border-radius: 10px;
                border: 1px solid #000;
            }
            
            .tooltip {
                display: block;
                position: absolute;
                left: 0;
                bottom: 120%;
                width: 100%;
                padding: 5px;
                border-radius: 10px;
                background-color: #09f;
                color: #fff;
                line-height: normal;
                text-transform: none;
                font-size: 20px;
                opacity: 0;
                transform: scaleY(0);
                transition: all 0.2s ease;
            }
            .tooltip:after {
                position: absolute;
                content: '';
                left: 10px;
                bottom: -5px;
                width: 0;
                height: 0;
                border-top: 5px solid #09f;
                border-right: 5px solid transparent;
                border-left: 5px solid transparent;
            }
            .info:hover .tooltip {
                opacity: 1;
                transform: scaleY(1);
            }
            
</style>




<div class="container center">

<div style="margin:1% auto 1%" class="card row">

    <div id="boxshadow" style="margin:10% auto 1%;" class="col-12 col-md-6 col-sm-12 col-lg-6">
        <img class="room" src="img\Onebedroom.jpg">
      
      
        </div>
          <a class="info" data-tooltip-text="Link will open in a new tab" href="http://www.cumberland.com.au/rooms/one-bedroom-apartment" target="blanck"><span style="display:block;">ONE BEDROOM APARTMENT<br><small>For 2-4 (guests)</small></span></a>
          
          
        <div id="boxshadow" style="margin:0 auto 1%;"   class="col-12 col-md-6 col-sm-12 col-lg-6">
            <img class="room" src="img\twobedroom.jpg">

  
    </div>
    
    <a class="info" data-tooltip-text="Link will open in a new tab" href="http://www.cumberland.com.au/rooms/two-bedroom-apartment" target="blanck"><span style="display:block;">TWO BEDROOM PENTHOUSE<br><small>For 2 – 6 (guests)</small></span></a>
    </div>
    </div>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript">
        
        (function() {
            
            var infoElem = $('.info');
                
            infoElem.each(function() {
                var self = $(this),
                    selfTooltipText = self.data('tooltip-text');
                if ( selfTooltipText ) $('<span/>', {class: 'tooltip', text: selfTooltipText}).appendTo(self);
            });
                
            
        })();
        
        
        
    </script>
    <script>
function goBack() {
  window.history.back();
}

</script>




  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <!--<script type="text/javascript" src="js/tooltip.js"></script>-->
  <!--<script type="text/javascript" src="js/popper.min.js"></script>-->
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity
</body>

</html>
