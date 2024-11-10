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
?>