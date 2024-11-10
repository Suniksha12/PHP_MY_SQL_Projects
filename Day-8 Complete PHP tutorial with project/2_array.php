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
  }

  //2)Associative array
  $subject = array("suniksha"=>"cse","riya"=>"mtech");
  echo $subject["suniksha"]. "<br>";
  echo $subject["riya"] . "<br>";

  foreach($subject as $x=>$value){
     echo "key=".$x.",value=".$value;
     echo "<br>";
  }
  
?>