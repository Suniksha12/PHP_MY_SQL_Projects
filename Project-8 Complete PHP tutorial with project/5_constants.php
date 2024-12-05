<?php
 //syntax of constants
 //define(name,value,case_insensitive);

    define("NAME","Suniksha");
    echo NAME;
    echo "<br>";

//  define("_NAME","Suniksha",true);
//  echo _Name;

    define("colors",["blue","green","yellow"]);
    echo colors[2];
    echo "<br>";

    function myColor(){
        echo colors[0];
    }
    myColor();
?>