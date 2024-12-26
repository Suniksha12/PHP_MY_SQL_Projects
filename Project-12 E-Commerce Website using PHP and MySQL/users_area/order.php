<?php
    include_once("../includes/connect.php");
    include_once("../functions/common_function.php");

    if(isset($_GET['user_id'])){
        $user_id = $_GET['user_id'];

    }

    //getting total items and total price of all items
    $get_ip_address = getIPAddress();
    $total_price=0;
    $cart_query_price="SELECT * FROM `card_details` WHERE ip_address='$get_ip_address'";
    
?>
