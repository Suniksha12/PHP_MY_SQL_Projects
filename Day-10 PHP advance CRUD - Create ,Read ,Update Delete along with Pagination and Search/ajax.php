<?php
// print_r($_FILES);
// die;

$action = $_REQUEST['action'] ?? null; // Use null coalescing operator for safety
if (!empty($action)) {
    require_once 'partials/User.php';
    $obj = new User();
}

// Validate action
if (!in_array($action, ['adduser', 'getallusers', 'editusersdata'])) {
    echo json_encode(['error' => 'Invalid action']);
    exit();
}

// Adding user action
if ($action == 'adduser' && !empty($_POST)) {
    $pname = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $mobile = $_POST['mobile'] ?? '';

    // Accessing the uploaded file from $_FILES
    $photo = $_FILES['userphoto'] ?? null;

    $playerId = $_POST['userId'] ?? ''; // Use consistent naming

    $imagename = "";
    if ($photo && !empty($photo['name'])) {
        $imagename = $obj->uploadPhoto($photo);
    }

    $playerData = [
        'pname' => $pname,
        'email' => $email,
        'mobile' => $mobile,
    ];

    if ($imagename) {
        $playerData['photo'] = $imagename; // Add photo only if it exists
    }

    if ($playerId) {
        // Update user
        $updateResult = $obj->update($playerData, $playerId);
        if ($updateResult) {
            echo json_encode(['success' => true, 'message' => 'User  updated successfully']);
        } else {
            echo json_encode(['error' => 'Failed to update user']);
        }
    } else {
        // Add new user
        $newPlayerId = $obj->add($playerData);
        if ($newPlayerId) {
            $player = $obj->getRow('id', $newPlayerId);
            echo json_encode($player);
        } else {
            echo json_encode(['error' => 'Failed to add user']);
        }
    }
    exit();
}

// Get countOf function and get all users action
if ($action == 'getallusers') {
    $page = $_GET['page'] ?? 1;
    $limit = 4;
    $start = ($page - 1) * $limit;
    $users = $obj->getRows($start, $limit);
    $userlist = !empty($users) ? $users : [];
    $total = $obj->getCount();
    $userArr = ['count' => $total, 'players' => $userlist];
    echo json_encode($userArr);
    exit();
}

// Action to perform editing
if ($action == "editusersdata") {
    $playerId = (!empty($_GET['id'])) ? $_GET['id'] : '';
    if (!empty($playerId)) {
        $user = $obj->getRow('id', $playerId);
        echo json_encode($user);
    } else {
        echo json_encode(['error' => 'User  ID is required']);
    }
    exit();
}
?>