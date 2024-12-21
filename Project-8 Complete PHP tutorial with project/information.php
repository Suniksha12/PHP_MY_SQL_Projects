<?php
    session_start();
    echo "Welcome".$_SESSION['username'];
    echo "<br>";
    echo "and your password is ".$_SESSION['password'];
    echo "<br>";
    echo "Your email is ".$_SESSION['email'];

?>