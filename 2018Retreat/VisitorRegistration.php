



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Visitor Registration</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body class="container">
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Start a new Visitor Registration</h1>
    <p class="lead">Please fill in the following details</p>
  </div>
</div>

<form class="needs-validation" form method="post" action="connectVisitor.php">
  <div class="row">
  <!-- <div class="form-row"> -->
    <div class="col">
      <label>Husband Name</label>
      <input name="Husband" type="text" class="form-control"  placeholder="Name"  required>
     <label>Wife Name</label>
      <input name="Wife" type="text" class="form-control"  placeholder="Partner Name"  required>
     
    </div>
    <div class="col">
       <label>E-mail Address</label>
      <input name="Email" type="text" class="form-control"  placeholder="e-mail"  required>
      
    
      <label>Kids</label>
      <input name="Kids" type="number" min="0" class="form-control"  placeholder="Number"  required>
   
    </div>
       <div class="col">
       <label>Phone Number</label>
      <input name="Phone" type="text" class="form-control"  placeholder="Phone #"  required>

    </div>

  
    

  </div>
      <button class="btn btn-primary" type="submit">Submit</button>




</form>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</html>