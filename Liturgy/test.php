<?php
echo"<br>Last Week<br>";
$week=array("Saturday","Sunday","Monday","Tuesday","Wednesday","Thursday","Friday");
foreach($week as $day){
    echo "last $day  ";
    $Day = strtotime("last $day");
echo date('m/d/Y H:i:s', $Day).' <br> '; 
}
echo"<br>This week<br>";
foreach($week as $day){
    echo "$day  ";
    $Day = strtotime("$day");
echo date('m/d/Y H:i:s', $Day).' <br> '; 
}
echo"<br>Next Week<br>";
foreach($week as $day){
    echo "next $day";
    $Day = strtotime("next $day");
echo date('m/d/Y H:i:s', $Day).' <br> '; 
}



?>