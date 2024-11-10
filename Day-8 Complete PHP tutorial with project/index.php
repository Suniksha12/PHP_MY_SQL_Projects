<?php
   
   //syntax
   echo "hello world" . "<br>";

   //comments 
   /* Multi Line comment */
   
   //variables
   $name = "John";
   echo $name . "<br>";

   //variable scope 
   //local, golbal, static

   //local variables which are declared insidethe function will work good if you do something outside of it, the varaible maybe die.
   function local_variable(){
    $name = "John";
    echo $name . "<br>";
    }
    local_variable();

    //global scope - access outside the function
    $number1 = 30;
    function testing(){
        $number2=10;
        echo $number2 . "<br>";
    }
    echo $number1 . "<br>";
    testing();

    //static function
    function static_function(){
        static $number = 10;
        $number++;
        echo $number . "<br>";
        }
        static_function();
        static_function();

    //data types

    //string
    $language = "PHP";
    $langugage2 = 'HTML';
    echo $language . "<br>";
    echo $langugage2 . "<br>";
    echo var_dump($langugage2);

    //int 
    $age = 30;
    echo $age . "<br>";
    echo var_dump($age);

    //float
    $price = 30.50;
    echo $price . "<br>";
    echo var_dump($price) . "<br>";

    //boolean 
    $is_admin = true;
    echo $is_admin . "<br>";

    //arrays
    $colors = array("red", "green", "blue");
    echo $colors[0] . "<br>";

    //objects - real instance of class 
    class person{
        public $name;
        public $age;
    }

    //null
    $null = null;
    echo var_dump($null);

?>
<!-- Copied from bootstrap-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
  </body>
</html>