<?php
 include 'header.php';
 ?>
      
     <div class="container">
       <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Start a new Reservation</h1>
    <p class="lead">Please fill in the following details</p>
  </div>
</div>

<form class="needs-validation" form method="post" action="connect.php">
  <div class="row">
  <!-- <div class="form-row"> -->
    <div class="col-12 col-md-6 ">
      <label for="01"><strong>Husband Name</strong></label>
      <input name="HusbandName" type="text" class="form-control"  placeholder="Name"  required>
      <div class="valid-tooltip">
      </div>
	  </div>
	   <div class="col-12 col-md-6">
            <label for="01"><strong>E-mail Address</strong></label>
      <input name="e-mail" type="text" class="form-control"  placeholder="e-mail"  required>
      <div class="valid-tooltip">
      </div>
    </div>
    	   <div class="col-12 col-md-6">
            <label for="01"><strong>Phone Number</strong></label>
      <input name="Phone" type="text" class="form-control"  placeholder="Phone Number"  required>
      <div class="valid-tooltip">
      </div>
    </div>
    <div class="col-12 col-md-6">
      <label for="validationTooltip02"><strong>Wife Name</strong></label>
      <input name="WifeName" type="text" class="form-control"  placeholder="Partner Name"  required>
      <div class="valid-tooltip">
    
      </div>
    </div>

    <div class="col-12 col-md-6">
      <label for="validationTooltip02"><strong>Kids</strong></label>
      <input name="KidsNumber" type="number" min="0" class="form-control"  placeholder="Number"  required>
      <div class="valid-tooltip">
    
      </div>
    </div>
  
    <div class="col-12 col-md-6">
      <label  for="validationTooltip05"><strong>Room Type</strong></label>

<!--<input name="RoomFirst" type="text" class="form-control" id="validationTooltip02" placeholder="1st Choice"  required>-->
<select name='RoomFirst' required>
    <option value=''>Please Select</option>
    
    <option  value="One bedroom Apartment (garden view) - $380">One bedroom Apartment (garden view) - $380</option>
    <option disabled value="One bedroom Apartment (ocean view)  - $440">One bedroom Apartment (ocean view)  - $440</option>
    <option disabled value="Two Bedroom Apartment - $570">Two Bedroom Apartment - $570</option>

</select>

  <button class="btn btn-primary" type="submit">Submit</button>

  </div>




      </div>

</form>
      
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
