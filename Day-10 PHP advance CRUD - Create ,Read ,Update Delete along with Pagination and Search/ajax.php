<?php
//    print_r($_FILES);
//    die;

     $action=$_REQUEST['action'];
     if(!empty($action)){
        require_once 'partials/User.php';
        $obj=new User();
     }

     //adding user action
     if($action=='add' && !empty($_POST)){
        $pname = $_POST['username'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $photo = $_POST['photo'];

        $playerid = (!empty($_POST['userId']))? $_POST['userId']: "";
        
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
        if(!empty($playerid)){
            $player=$obj->getRow('id',$playerid);
            echo json_encode($player);
            exit();
        }
     }
?>