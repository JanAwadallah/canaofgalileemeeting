<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="form.css">
    <title>Registration</title>
  </head>
<body>
    <div class="main">
        <div class="wraping"> 
        
    <?php
    

 $servername = "localhost";
 $username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_Liturgy";



//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!conn){
    die("connection failed : ".mysqli_connect_error());
}

// function CheckTotal($Choice){
    

 $servername = "localhost";
 $username = "canaofga_jan";
$password = "Jesusch1";
$dbname = "canaofga_Liturgy";
$SetTime = $_GET['time'];
$SetDate = $_GET['date'];

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!conn){
    die("connection failed : ".mysqli_connect_error());
}
    $sql = "SELECT * FROM Members WHERE choice = 'StGeorgeChurch' AND time='$SetTime' ";
$results = mysqli_query($conn,$sql);
$datas=array();
if(mysqli_num_rows($results)>0){
    while ($row= mysqli_fetch_assoc($results)){
        $datas[]=$row;
        
    }
}
// print_r($datas);
$total=0;
foreach($datas as $data){
    $newTotal =$total += $data[Size];
}
$StGeorgeSpots  = 20 - $newTotal;




 $sql = "SELECT * FROM Members WHERE choice = 'StTheodoreChurch' AND time='$SetTime'";
$results = mysqli_query($conn,$sql);
$datas=array();
if(mysqli_num_rows($results)>0){
    while ($row= mysqli_fetch_assoc($results)){
        $datas[]=$row;
        
    }
}
// print_r($datas);
$total=0;
foreach($datas as $data){
    $StTheo_newTotal =$total += $data[Size];
}
$StTheodoreSpots  = 20 - $StTheo_newTotal;



$sql = "SELECT * FROM Members WHERE choice = 'Hall' AND time='$SetTime'";
$results = mysqli_query($conn,$sql);
$datas=array();
if(mysqli_num_rows($results)>0){
    while ($row= mysqli_fetch_assoc($results)){
        $datas[]=$row;
        
    }
}
// print_r($datas);
$total=0;
foreach($datas as $data){
    $HallnewTotal =$total += $data[Size];
}
$HallSpots  = 20 - $HallnewTotal;
// $HallSpots = call_user_func('CheckTotal','Hall');


echo '
    
    


     <div class="head">
     <img clss="altar" src="images/AltarNew.jpg">
     
 <span class="header">تسجيل حضور قداس<br> '.$SetDate.'السبت </ span></div>
<form class="needs-validation" form method="post" action="New_Connect.php">
<input  type="text" id="hidden" name="date"  value="'.$SetDate.'">
<div id="wraper">
<div class="Dtime">
<label class="switch">
  <input  type="radio" class="Stime" name="time" checked  value="'.$SetTime.'">
  <span class="slider">'.$SetTime.' am</span>
</label>

</div>
</div>

<input type="text" id="hidden" name="EventType" value="Sat. Mass">


  <div class="form-group row">
    <label for="fullName" class="col-sm-2 col-form-label">الأسم</label>
    <div class="col-sm-10">
      <input name="fullName" type="text" required class="form-control"  id="fullNam">
    </div>
  </div>
  <div class="form-group row">
    <label for="phone" class="col-sm-2 col-form-label">رقم التليفون</label>
    <div class="col-sm-10">
      <input name="phone" type="number" required class="form-control" id="phone">
    </div>
  </div>
    <div class="form-group row">
    <label for="NoP" class="col-sm-2 col-form-label">عدد الحضور</label>
    <div class="col-sm-10">
      <input  name="Size" min="1" max="5" required  type="number" class="form-control" id="NoP"  placeholder="أقصى عدد خمس أفراد">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">مكان حضور القداس</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="radio" type="radio"  checked name="choice" value="StGeorgeChurch">
          <label>كنيسة مارجرجس</label>
          <label     >>>>>>>  عدد الأماكن المتاحة : </label>
          <label>'.$StGeorgeSpots.'</label>
          
        </div>
        
        <div class="form-check">
        <input class="radio" type="radio" name="choice" value="StTheodoreChurch">
        <label>كنيسة الامير تادرس</label>
        <label     >>>>>>>  عدد الأماكن المتاحة : </label>
        <label>'.$StTheodoreSpots.'</label>
        </div>
        
        <div class="form-check">
        <input class="radio" type="radio" name="choice" value="Hall">
        <label>قاعة مارجرجس</label>
        <label     >>>>>>>  عدد الأماكن المتاحة : </label>
        <label>'.$HallSpots.'</label>

        </div>
      </div>
    </div>
  </fieldset>


  <div class="form-group row">
    
      <button   type="submit" class="btn btn-primary send">تسجيل</button>
    
  </div>
  
</form>


 ';
 $spots=array($StGeorgeSpots,$StTheodoreSpots,$HallSpots);
 $i=0;
while($i < 3) {

        if ($spots[$i]===0){
echo '<script type="text/javascript">
var tag = document.getElementsByClassName("form-check");
tag['.$i.'].style.display="none";
var x =document.getElementsByClassName("radio");
x['.$i.'+1].checked=true;
</script>'
;

}
  $i++;
}  
if($StGeorgeSpots===0 && $StTheodoreSpots===0 && $HallSpots===0 ){
    echo '
            <div><h1 style="text-align:center;">عذرا! لا توجد أماكن أخرى متاحة --- تم إغلاق التسجيل</h1></div>  
    <script type="text/javascript">
var tag1 =document.getElementsByTagName("button");
tag1[0].disabled=true;
</script>
    
    ';
}



  ?>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 </div>
  </div>
  <script>


      document.addEventListener("DOMContentLoaded", function() {
    var elements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("برجاء ادخال البيانات");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
})
  </script>
  
  </body>
</html>