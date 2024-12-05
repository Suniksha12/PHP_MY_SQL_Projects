<?php
  //php loops
  //for loop
  for($x=0;$x<10;$x++){
    echo $x;
    echo "<br>";
  }

  //for each
  $fruits=array("apple","orange","banana");
  foreach($fruits as $values){
    echo $values . "<br>";
  }

  $mydata=array("name"=>"suniksha","branch"=>"cse");
  foreach($mydata as $x=>$values){
     echo "$x=>$values"."<br>";
  }

  //while loop
  $x=1;
  while($x<6){
    echo $x;
    echo "<br>";
    $x++;
  }

  //dowhile loop
  $x=1;
  do{
    echo $x;
    echo "<br>";
    $x++;
  }while($x<6);

  //break
  for($x=0;$x<5;$x++){
    echo $x;
    echo "<br>";
    if($x==6){
        break;
    }
  }

  //continue
  for($x=0;$x<5;$x++){
    if($x==6){
       continue;
    }
    echo $x;
    echo "<br>";
  }


?>