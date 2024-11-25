<?php
//    print_r($_FILES);
//    die;

     $action=$_REQUEST['action'];
     if(!empty($action)){
        require_once 'partials/User.php';
        $obj=new User();
     }

     //adding user action
     if($action=='adduser' && !empty($_POST)){
        $pname = $_POST['username'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $photo = $_POST['photo'];

        $playerid = (!empty($_POST['userid']))? $_POST['userid']: '';
        
        $imagename = "";
        if(!empty($photo['name'])){
            $imagename = $obj->uploadPhoto($photo);
            $playerData = [
                'pname'=>$pname,
                'email'=>$email,
                'mobile'=>$mobile,
                'photo'=>$imagename,
            ];
        } else {
            $playerData = [
                'pname'=>$pname,
                'email'=>$email,
                'mobile'=>$mobile,
            ];
        }
        $playerid=$obj->add($playerData);
        if(!empty($playerId)){
            $player=$obj->getRow('id',$playerId);
            echo json_encode($player);
            exit();
        }
     }
?>