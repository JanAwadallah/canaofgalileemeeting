<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
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
      </div>


      
  
  <!-- /Start your project here-->


      <div class="jumbotron" style="border-radius: 15px;">
        <div class="header text-center ">


    <h1 class="display-4">Start a new Visitor Registration</h1>

    <p class="lead">Please fill in the following details</p>
</div>
  </div>
  

<div class="container">


<form class="needs-validation" form method="post" action="connectVisitor.php">

  <div class="row">

  <!-- <div class="form-row"> -->

    <div class="col-12 col-md-6">

      <label>Husband Name</label>

      <input name="Husband" type="text" class="form-control"  placeholder="Name"  required>

     <label>Wife Name</label>

      <input name="Wife" type="text" class="form-control"  placeholder="Partner Name"  required>

     

    </div>

    <div class="col-12 col-md-6">

       <label>E-mail Address</label>

      <input name="Email" type="text" class="form-control"  placeholder="e-mail"  required>

      

    

      <label>Kids</label>

      <input name="Kids" type="number" min="0" class="form-control"  placeholder="Number"  required>

   

    </div>

       <div class="col-12 col-md-6">

       <label>Phone Number</label>

      <input name="Phone" type="text" class="form-control"  placeholder="Phone #"  required>



    </div>



  

    



  </div>

      <button class="btn btn-primary" type="submit">Submit</button>









</form>
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
</body>

</html>
