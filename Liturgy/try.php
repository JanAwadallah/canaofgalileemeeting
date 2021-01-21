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
         
     

 

     <div class="head">
		<img id="StGeorge" src="images/StGeorgeLogo.png" alt="" data-position="center" />
     
 <span class="header">  تسجيل حضور قداس السبت<br></span></div>



        
<div id="wraper">
<div class="Dtime">
    
    <select>
                <option disabled> تاريخ القداس</option>

<?php

$dates[]=array(20200606,20200613,20200620,20200627,20200704,20200711,20200718,20200725,20200801,20200808,20200815,20200822,20200829);
$Vdates[]=array('2020/06/06','2020/06/13','2020/06/20','2020/06/27','2020/07/04','2020/07/11','2020/07/18','2020/07/25','2020/08/01','2020/08/08','2020/08/15','2020/08/22','2020/08/29');

for($i=0; $i<count($dates[0]); $i++){
    echo'
    
            <option style="display:none;"  name="option" value="'.$dates[0][$i].'">
           '.$Vdates[0][$i].' </option>
           
          
        ';
}




?>
</select>
<br><br>
    <lable id="selectTime">إختار  ميعاد القداس</lable><br><br>

<label class="switch">
  <input onclick="myFunction()" type="radio" class="Stime" name="time"   value="07:00">
  <span class="slider">7:00 am</span>
</label>

<label  class="switch">
  <input onclick="myFunction()" type="radio" name="time" class="Stime"  value="09:00" >
  <span class="slider">9:00 am</span>
</label>
</div>
</div>
   
 
 
 
<script>
 function myFunction(){

 var x =document.getElementsByClassName("Stime");
 for(y=0; y<x.length; y++ ){
  if(x[y].checked){
var z = x[y].value;

}   
 }
  var x =document.getElementsByClassName("Stime");
 for(y=0; y<x.length; y++ ){
  if(x[y].checked){
var z = x[y].value;

}   
 }
 D=document.getElementsByTagName("option");
var VDates=['2020/06/06','2020/06/13','2020/06/20','2020/06/27','2020/07/04','2020/07/11','2020/07/18','2020/07/25','2020/08/01','2020/08/08','2020/08/15','2020/08/22','2020/08/29'];

for( i=0; i < D.length; i++ ){
    if(D[i].selected){
    OD=VDates[i];

    }

}


    window.location.href = "new.php?time=" + z + "&date=" + OD;
}
</script>
          
        <script>
            var d = new Date();
var y = String(d.getFullYear());
var m =String(d.getMonth()+1);
var D= (d.getDate());
FullDate = parseInt(y+"0"+m+"0"+D);

x=document.getElementsByTagName("option");
// D=document.getElementsByClassName("Date");

for( i=0; i < x.length; i++ ){
	OD=parseInt(x[i].value);
	Diff=OD-FullDate;
	if ((Diff)>0 && Diff<7){
		x[i].style.display="initial";
// 		D[i].style.display="initial";

		x[i].selected=true;
		

	}
	}
        </script>
        



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 </div>
  </div>
 

  </body>
</html>

