<?php
   //functions block of statements that can be called again and again without making a code lengthy
   // and can be called anywhere inside the program


   //synatx
//    function functionName(){
//     ///
//    }
//    functionName();


    function message(){
        echo 'Thank you <br>';
    }
    message();
    message();

    //function with argument
    function message_key($name){
        echo "Hi my name is $name";
        echo "<br>";
    }
    message_key("Thomas");
    message_key("Priti");
    message_key("Dipti");

    function numbers(int $x,int $b){
        return $x+$b;
    }
    echo numbers(10,"100");
    echo "<br>";

    //declare(strict_types=1);

    function numbers_key(int $x,int $b):int{
        return $x+$b;
    }
    echo numbers_key(10,"100");
    echo "<br>";



?>