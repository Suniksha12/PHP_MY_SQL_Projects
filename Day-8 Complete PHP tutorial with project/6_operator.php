<?php
  //operators 

  //arithmetic operators
  $x = 10;
  $y = 20;
  $c = $x+$y;
  echo $c;
  echo "<br>";

  $c = $x-$y;
  echo $c;
  echo "<br>";

  $c = $x*$y;
  echo $c;
  echo "<br>";

  $c = $x/$y; //quotient as output
  echo $c;
  echo "<br>";

  $c = $x%$y; //remainder as output
  echo $c;
  echo "<br>";

  echo $x**$y;
  echo "<br>";

  //asignment operator
  $mydata = "Cse";
  $number = 2;
  $number += 20;
  echo $number;
  echo "<br>";

  $mydata = "Cse";
  $number = 2;
  $number -= 20;
  echo $number;
  echo "<br>";

  $mydata = "Cse";
  $number = 2;
  $number *= 20;
  echo $number;
  echo "<br>";

  $mydata = "Cse";
  $number = 2;
  $number /= 20;
  echo $number;
  echo "<br>";

  $mydata = "Cse";
  $number = 2;
  $number %= 20;
  echo $number;
  echo "<br>";

  //comparison operator
  $x=10;
  $y=10;
  echo (var_dump($x==$y));
  echo "<br>";

  $x=10;
  $y="10";
  echo (var_dump($x===$y));
  echo "<br>";

  $x=10;
  $y="10";
  echo (var_dump($x!=$y)); //chcek only the  value
  echo "<br>";

  $x=101;
  $y="10";
  echo (var_dump($x!==$y)); //check both type and value
  echo "<br>";

  $x="100";
  $y="100";
  echo (var_dump($x<>$y));
  echo "<br>";

  $x=10;
  $y=100;
  echo (var_dump($x>$y));
  echo "<br>";

  $x=10;
  $y=100;
  echo (var_dump($x<$y));
  echo "<br>";

  $x=10;
  $y=100;
  echo (var_dump($x>=$y));
  echo "<br>";

  $x=10;
  $y=100;
  echo (var_dump($x<=$y));
  echo "<br>";

  //php spaceship operator
  $x=104;
  $y=100;
  echo (var_dump($x<=>$y)); //left hand side is greater than ouput is 1 else -1
  echo "<br>";

  //increment operator post increment
  $number = 10;
  echo $number."<br>";

  $number++;
  echo $number."<br>";

  //preincrement
  $number = 10;
  echo $number."<br>";

  ++$number;
  echo $number."<br>";

  //post drecrement
  $number = 10;
  echo $number."<br>";

  $number--;
  echo $number."<br>";

  //pre decrement
  $number = 10;
  echo $number."<br>";

  --$number;
  echo $number."<br>";

  //logical operator
  //and,or,xor,not
  $x = 10;
  $y = 15;
  if($x==10 and $y==15){
    echo "Iam printed";
  }
  echo "<br>";

  $x = 10;
  $y = 150;
  if($x==10 or $y==15){
    echo "Iam printed";
  }
  echo "<br>";

  $x = 10;
  $y = 15;
  if($x==10 && $y==15){
    echo "Iam printed";
  }
  echo "<br>";

  $x = 10;
  $y = 150;
  if($x==10 && $y==15){
    echo "Iam printed";
  }
  echo "I am outside the loop";
  echo "<br>";

  //not opeartor
  $x=0;
  echo !$x;
  echo "<br>";

  // Xor 
  $x = 10;
  $y = 15;
  if($x==10 xor $y==15){
    echo "Iam printed";
  }
  echo "I am outside the loop";
  echo "<br>";

?>