<?php
   //conditional statements
   //if statements
   $a=9;
   if($a==9){
    echo "Yes i m 9";
    echo "<br>";
   }

   $a=9;
   if($a==90){
    echo "Yes i m 9";
    echo "<br>";
   }
   echo "I m outside";
   echo "<br>";

   //if-eslse statemnt
   $day = "sunday";
   if($day == "sunday"){
    echo "its holiday";
    echo "<br>";
   }
   else {
    echo "Its not holiday<br>";
    echo "<br>";
   }
   echo "I am optional and always printed<br>";

   //if else ladder
   $time = 8;
   if($time<12){
    echo "Good morning<br>";
   } else if($time <17){
    echo "Good afternoon<br>";
   } else {
    echo "Good evenging";
   }

   //switch 
   $color="yellow";
   switch($color){
    case "red":
        echo "This is red";
        break;
    case "purple":
        echo "this is purple";
        break;
    case "yellow":
        echo "this is yellow";
        break;
    default:
        echo "this is default";
   }
?>