<!-- piece of information stored inside our system -->

<?php 
  //syntax of setting cookies
  //setcookie(name,value,expires,path);

  $category_name = "Food";
  $category_value = "Biryani";

  setcookie($category_name,$category_value,time()+86400,"/");
  echo "Cookie is set";

  
?>