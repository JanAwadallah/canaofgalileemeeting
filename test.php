<?php
 include 'header.php';
 ?>
      
     <div class="container">
       <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h2>Registration for Sunday Liturgy</h2>
    <h2>التسجيل في قداس الأحد</h2>
    <p class="lead">Please fill in the following details</p>
  </div>
</div>

<form class="needs-validation" form method="post" action="New_Connect.php">
  <div class="row">
  <!-- <div class="form-row"> -->
    <div class="col-12 col-md-6 boundry">
      <label class="float-left"><strong>Full Name</strong></label><label class="float-right"><strong> الاسم بالكامل</strong></label>
      <input name="fullName" type="text" class="form-control"  placeholder="Full Name     الاسم بالكامل"  required>
      <div>
      </div>
	  </div>
	   <div class="col-12 col-md-6 boundry ">
            <label class="float-left"><strong>Address</strong></label> <label class="float-right"><strong> العنوان</strong></label>
      <input name="address" type="text" class="form-control"  placeholder="Home Address   العنوان"  required>
      <div >
      </div>
    </div>
    	   <div class="col-12 col-md-6 boundry">
            <label class="float-left"><strong>Phone Number</strong></label><label class="float-right"><strong> رقم الهاتف</strong></label>
      <input name="phone" type="text" class="form-control"  placeholder="Phone Number     رقم الهاتف"  required>
      <div >
      </div>
    </div>

    <div class="col-12 col-md-6 boundry">
      <label class="float-left"><strong>Number of family members</strong></label><label class="float-right"><strong>عدد أفراد الاسرة</strong></label>
      <input name="Size" type="number" min="0" class="form-control"  placeholder="Number of family members    عدد أفراد الاسرة"  required>
      <div>
    
      </div>
    </div>
  
    <div class="col-12 col-md-6 boundry">
       <label class="float-left"><strong>Liturgy</strong></label><label class="float-right"><strong>القداس</strong></label>

<input name="choice" type="text" class="form-control" id="validationTooltip02" placeholder="StGeorgeChurch"  required>
<!--<select class="center" name='Group_id' required>-->

    

<!--$servername = "localhost";-->
<!--$username = "canaofga_jan";-->
<!--$password = "Jesusch1";-->
<!--$dbname = "canaofga_Liturgy";-->



// Create connection
<!--$conn = new mysqli($servername, $username, $password, $dbname);-->




<!-- $sql ="select * from Groups";-->
<!--  $records = mysqli_query($conn, $sql);-->
<!--  mysqli_query("SET Groups 'utf-8';");-->
<!--  $row = mysqli_fetch_array($records);-->
<!--while($row = mysqli_fetch_array($records)) {-->
    
   
<!--   echo  '<option  value="'.$row['Group_id'].'">'.$row['GroupName'].'</option>';-->
<!--   }-->
<!--?>-->
<!--</select>-->

  </div>




      </div>
      <div class"float-right" id="Submit_btn">
  <button class="btn btn-primary" type="submit">Register   سجل</button>
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
