<?php
  $number=10;
  echo(is_int($number));
  echo "<br>";

  //boolean
  $number=10;
  var_dump(is_int($number));
  echo "<br>";

  //floating point number
  $number=10.575464;
  echo(is_float($number));
  echo "<br>";

  $number="10.575464";
  var_dump(is_float($number));
  echo "<br>";

  //is numeric
  $number="10rrr";
  var_dump(is_numeric($number));
  echo "<br>";

  //casting
  $x = 10.33;
  echo $x;
  echo "<br>";
  var_dump($x);
  echo "<br>";
  $intnumber = (int)$x;
  echo $intnumber;
  echo "<br>";
  var_dump($intnumber);

  $x = "Hello World";
  echo $x;
  echo "<br>";
  var_dump($x);
  echo "<br>";
  $intnumber = (int)$x;
  echo $intnumber;
  echo "<br>";
  var_dump($intnumber);
  echo "<br>";

  //math function
  echo pi();
  echo "<br>";

  //min function
  echo (min(1,3,0,4,6));
  echo "<br>";
  echo (max(1,2,6,4,9,0));
  echo "<br>";
  echo (abs(100));
  echo "<br>";
  echo (sqrt(64));
  echo "<br>";
  echo (round(1.2));
  echo "<br>";
  echo (rand(20,200));
  echo "<br>";
  
?>