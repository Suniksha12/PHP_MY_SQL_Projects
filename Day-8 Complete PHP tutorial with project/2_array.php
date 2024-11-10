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

  //multidimensional Array
  $color=array(array("red",11),array("blue",10),array("orange",80));
  echo $color[0][1] . "<br>";

  for($row=0;$row<3;$row++){
    echo "Row".$row . "<br>";
    for($col=0;$col<2;$col++){
        echo $colors[$row][$col] . "<br>";
    }
  }

  //functions in array

  //sort
  $fruits=array("apple","mango","pineapple","banana");
  sort($fruits);
  print_r($fruits);

  //asort
  
?>