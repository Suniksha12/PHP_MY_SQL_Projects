<?php

   //read file
   echo readfile('data.txt');

//    fopen()
    $mydata = fopen("data.txt","r");
    echo fread($mydata,filesize("data.txt"));
    fclose($mydata);
?>