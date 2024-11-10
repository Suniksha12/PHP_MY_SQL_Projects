<?php
  //Arrays
  $colors = array("blue","green","yellow");
  echo $colors[0] . "<br>";
  
  //echo $colors;
  print_r($colors) . "<br>";

  //indexed array
  $colors = array("blue","green","yellow");
  $colorlength = count($colors);
  echo $colorlength;

  for($x=0;$x<$colorlength;$x++){
    echo $colors[$x] . "<br>";

    $subject = array("suniksha"=>"cse","riya"=>"mtech");
    echo $subject["suniksha"];
  }
?>