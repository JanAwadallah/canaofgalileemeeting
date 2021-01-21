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
    <div class="container">
      <div class="jumbotron"><h3>Add new event</h3></div>

      <form action="addevent.php" method="POST">
        <div class="form-group">
          <label for="Input1">Event Name</label>
          <input type="text" name="title" class="form-control" id="Input1" placeholder="Event Name">
        </div>
        <div class="form-group">
          <label for="Input2">Date</label>
          <input type="text" name="whenDate" class="form-control" id="Input2" placeholder="Date">
        </div>
        <div class="form-group">
          <label for="Input3">Time</label>
          <input type="text" name="whenTime" class="form-control" id="Input3" placeholder="Time">
        </div>
        <div class="form-group">
          <label for="Input3">Address</label>
          <input type="text" name="whereAddress" class="form-control" id="Input4" placeholder="Address">
        </div>
        


        <div class="form-group">
          <label for="Input5">Event Details</label>
          <textarea name="eventText" class="form-control" id="Input5" rows="5"></textarea>
        </div>
         <button type="submit" name="submit">Send Event</button>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity
  </body>

  </html>
