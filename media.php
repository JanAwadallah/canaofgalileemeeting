<?php
 include 'header.php';
php?>
<html>
<head>
	<title>media</title>
	<link href="media.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Jomhuria&display=swap" rel="stylesheet">
</head>

<body>
    
 
    
    <div class="container-fluid p-2">
 
    <div class="container">
        <p><h4 style="text-align: center; font-size:4em; font-family: 'Jomhuria', cursive;">Playlist</h4>
          <center> <button id="toggle1" onclick="toggle1()" type="button" class="btn btn-primary active"  aria-pressed="true" autocomplete="off">
  Local Playlist
</button>
<button id="toggle2" onclick="toggle2()" type="button" class="btn btn-primary"  aria-pressed="false" autocomplete="off">
  Youtube Playlist
</button></center><br>

        <div id="local_list">
 <?php include "Upload/play_list.php";?>
</div><br>
<center><div id="youtubeList" class="d-none">
<iframe style="width:100%; height:60vh"
src="https://www.youtube.com/embed/videoseries?list=PLOdtoOOKwzo0EGdD3JEinRlfdURfk3W6N" frameborder="0" allow="accelerometer;  encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</iframe>
</div></center>
<!--  <div class="row">-->
      
<!--    <div class="col-sm">-->
<!--        <p><h4 style="text-align: center; font-size:2em; font-family: 'Jomhuria', cursive;"> سبع مرات كل يوم</h4></p>-->
<!--      <div class="embed-responsive embed-responsive-16by9">-->
<!--  <video width="320" height="240" controls >-->
<!--    <source src="media/Glorification Vierge St Mary.mp4" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"'>-->
<!--</video>-->

<!--</div>-->

<!--    </div>-->
<!--  <div class="col-sm">-->
<!--        <p><h4 style="text-align: center; font-size:2em; font-family: 'Jomhuria', cursive;">مل أحلى ساعة الصلاة </h4></p>-->
<!--      <div class="embed-responsive embed-responsive-16by9">-->
<!--  <video width="320" height="240" controls>-->
<!--    <source src="media/Ma-A7la.mp4" type="video/mp4">-->
<!--</video>-->
<!--</div>-->

<!--    </div>-->
<!--   <div class="col-sm">-->
<!--        <p><h4 style="text-align: center; font-size:2em; font-family: 'Jomhuria', cursive;">المسيح قام </h4></p>-->
<!--      <div class="embed-responsive embed-responsive-16by9">-->
<!--  <video width="320" height="240" controls>-->
<!--    <source src="media/AlmaseehKam.mp4" type="video/mp4">-->
<!--</video>-->
<!--</div>-->

<!--    </div>-->
<!--  </div>-->
  
<!--  <div class="row">-->
      
<!--    <div class="col-sm">-->
<!--        <p><h4 style="text-align: center; font-size:2em; font-family: 'Jomhuria', cursive;">العالم يبنى ويزرع</h4></p>-->
<!--      <div class="embed-responsive embed-responsive-16by9">-->
<!--  <video width="320" height="240" controls >-->
<!--    <source src="media/ترنيمة العالم يبنى ويزرع.mp4" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"'>-->
<!--</video>-->

<!--</div>-->

<!--    </div>-->
<!--  <div class="col-sm">-->
<!--        <p><h4 style="text-align: center; font-size:2em; font-family: 'Jomhuria', cursive;"> في ظل حبيبى اشتهيت الجلوس</h4></p>-->
<!--      <div class="embed-responsive embed-responsive-16by9">-->
<!--  <video width="320" height="240" controls>-->
<!--    <source src="media/ترنيمة فى ظل حبيبى اشتهيت الجلوس.mp4" type="video/mp4">-->
<!--</video>-->
<!--</div>-->

<!--    </div>-->
<!--   <div class="col-sm">-->
<!--        <p><h4 style="text-align: center; font-size:2em; font-family: 'Jomhuria', cursive;">ترنيمة قام المسيح - القس موسى رشدي </h4></p>-->
<!--      <div class="embed-responsive embed-responsive-16by9">-->
<!--  <video width="320" height="240" controls>-->
<!--    <source src="media/ترنيمة قام المسيح - القس موسى رشدي - ليلة الصلاة لينا رجاء من الأنافورة_2.mp4" type="video/mp4">-->
<!--</video>-->
<!--</div>-->

<!--    </div>-->
<!--  </div>-->
  
  

<!--  <div class="row">-->
      
<!--    <div class="col-sm">-->
<!--        <p><h4 style="text-align: center; font-size:2em; font-family: 'Jomhuria', cursive;">يا كل الصفوف السمائيين</h4></p>-->
<!--      <div class="embed-responsive embed-responsive-16by9">-->
<!--  <video width="320" height="240" controls >-->
<!--    <source src="media/يا كل الصفوف السمائيين - كورال اغابى.mp4" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"'>-->
<!--</video>-->

<!--</div>-->

<!--    </div>-->
<!--  <div class="col-sm">-->
<!--        <p><h4 style="text-align: center; font-size:2em; font-family: 'Jomhuria', cursive;">لما يكون للقلب عيون</h4></p>-->
<!--      <div class="embed-responsive embed-responsive-16by9">-->
<!--  <video width="320" height="240" controls>-->
<!--    <source src="media/LamaYkon.mp4" type="video/mp4">-->
<!--</video>-->
<!--</div>-->

<!--    </div>-->
<!--   <div class="col-sm">-->
<!--        <p><h4 style="text-align: center; font-size:2em; font-family: 'Jomhuria', cursive;"> و فيما اظنه لايستجيب </h4></p>-->
<!--      <div class="embed-responsive embed-responsive-16by9">-->
<!--  <video width="320" height="240" controls>-->
<!--    <source src="media/WaFemaAzonaho.mp4" type="video/mp4">-->
<!--</video>-->
<!--</div>-->

<!--    </div>-->
<!--  </div>-->
  
<!--  <div class="row">-->
      
<!--    <div class="col-sm">-->
<!--        <p><h4 style="text-align: center; font-size:2em; font-family: 'Jomhuria', cursive;">هل جلستَ في هدوءٍ</h4></p>-->
<!--      <div class="embed-responsive embed-responsive-16by9">-->
<!--  <video width="320" height="240" controls>-->
<!--    <source src="media/HalGalasta.mp4" type="video/mp4">-->
<!--</video>-->
<!--</div>-->

<!--    </div>-->
<!--  <div class="col-sm">-->
<!--        <p><h4 style="text-align: center; font-size:2em; font-family: 'Jomhuria', cursive;">إني لرافع عيني إلى السماء</h4></p>-->
<!--      <div class="embed-responsive embed-responsive-16by9">-->
<!--  <video width="320" height="240" controls>-->
<!--    <source src="media/EnyLaRafe3.mp4" type="video/mp4">-->
<!--</video>-->
<!--</div>-->

<!--    </div>-->
<!--   <div class="col-sm">-->
<!--        <p><h4 style="text-align: center; font-size:2em; font-family: 'Jomhuria', cursive;">كيف لي </h4></p>-->
<!--      <div class="embed-responsive embed-responsive-16by9">-->
<!--  <video width="320" height="240" controls>-->
<!--    <source src="media/KayfLee.mp4" type="video/mp4">-->
<!--</video>-->
<!--</div>-->

<!--    </div>-->
  </div>
</div>
</div>
<script>
function toggle1(){
    x=document.getElementById('youtubeList');
    y=document.getElementById('local_list');
    b1=document.getElementById('toggle1');
    b2=document.getElementById('toggle2');
    if(y.className == "d-none"){
        x.classList.add("d-none");
        y.classList.remove("d-none");
        b1.ariaPressed="true";
        b1.classList.add("active");
        b2.ariaPressed="false";
        b2.classList.remove("active");
    }
}
function toggle2(){
    x=document.getElementById('youtubeList');
    y=document.getElementById('local_list');
    b1=document.getElementById('toggle1');
    b2=document.getElementById('toggle2');
    if(x.className == "d-none"){
        x.classList.remove("d-none");
        y.classList.add("d-none");
        b1.ariaPressed="false";
        b1.classList.remove("active");
        b2.ariaPressed="true";
        b2.classList.add("active");
    }
    
}
</script>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script src="https://kit.fontawesome.com/9762763fea.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity


 </body>

</html>