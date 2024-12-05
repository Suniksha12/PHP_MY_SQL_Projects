<?php
   //global varaibles

   //GLOBALS
   $a =10;
   $b=20;
   function numbers(){
    //echo $a;
    $GLOBALS['result']=$GLOBALS['a']+$GLOBALS['b'];
    echo $GLOBALS['result'];
    echo "<br>";
   }
   numbers();
   echo $result;

   //$_SERVER returns file path
   echo $_SERVER['PHP_SELF'];

   //$_SERVER returns server name
   echo $_SERVER['SERVER_NAME'];
?>