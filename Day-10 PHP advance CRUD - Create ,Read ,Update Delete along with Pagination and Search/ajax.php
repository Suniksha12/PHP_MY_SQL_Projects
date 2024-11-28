<?php
// print_r($_FILES);
// die;

$action = $_REQUEST['action'];
if (!empty($action)) {
    require_once 'partials/User.php';
    $obj = new User();
}

// Adding user action
if ($action == 'adduser' && !empty($_POST)) {
    $pname = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // Accessing the uploaded file from $_FILES
    $photo = isset($_FILES['userphoto']) ? $_FILES['userphoto'] : null;

    $playerid = (!empty($_POST['userid'])) ? $_POST['userid'] : '';

    $imagename = "";
    if ($photo && !empty($photo['name'])) {
        $imagename = $obj->uploadPhoto($photo);
        $playerData = [
            'pname' => $pname,
            'email' => $email,
            'mobile' => $mobile,
            'photo' => $imagename,
        ];
    } else {
        $playerData = [
            'pname' => $pname,
            'email' => $email,
            'mobile' => $mobile,
        ];
    }

    $playerId = $obj->add($playerData); // Note: Fixed variable name from $playerid to $playerId
    if (!empty($playerId)) {
        $player = $obj->getRow('id', $playerId);
        echo json_encode($player);
        exit();
    }
}

// Get countOf function and get all users action
if ($action == 'getallusers') {
    $page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
    $limit = 4;
    $start = ($page - 1) * $limit;
    $users = $obj->getRows($start, $limit);
    if (!empty($users)) {
        $userlist = $users;
    } else {
        $userlist = [];
    }
    $total = $obj->getCount();
    $userArr = ['count' => $total, 'players' => $userlist]; // Change 'users' to 'players'
    echo json_encode($userArr); // Return the complete array
    exit();
}

//action to  perform editing
if($action == "editusersdata"){
    $playerId = (!empty($_GET['id'])) ? $_GET['id'] : '';
    if(!empty($playerId)){
        $user = $obj->getRow('id', $playerId);
        echo json_encode($user);
        exit();
    }
}
?>