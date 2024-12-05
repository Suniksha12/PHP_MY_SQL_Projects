<?php
   session_start();
   if(!isset($_SESSION['id'])){
      header('Location:../');
   }
    $data = $_SESSION['data'];
    if($_SESSION['status']==1){
        $status = '<b class = "text-success">Voted</b>';
    } else{
        $status = '<b class = "text-danger">Not Voted</b>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>PHP Voting System</title>
</head>
<body class="bg-secondary text-light">
    <div class="container my-5">
        <a href="../"><button class="btn btn-dark text-light px-3">Back</button></a>
        <a href="logout.php"><button class="btn btn-dark text-light px-3">Log Out</button></a>
        <h1 class="my-3">Voting System</h1>
        <div class="row my-5">
           <div class="col-md-7">
             <?php
                 if(isset($_SESSION['groups'])){
                     $groups=$_SESSION['groups'];
                     for($i=0;$i<count($groups);$i++){
                        ?>
                           <div class="row">
                           <div class="col-md-4">
                               <img src="../uploads/<?php echo $groups[$i]['photo'] ?>" alt="Image1">
                           </div>
                           <div class="col-md-8">
                               <strong class="text-dark h5">Group name:</strong>
                               <?php echo $groups[$i]['username'] ?><br>
                               <strong class="text-dark h5">Votes:</strong>
                               <?php echo $groups[$i]['votes'] ?><br>
                           </div>
                       </div>
                       <form action="../actions/voting.php" method="post">
                          <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes'] ?>">
                          <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id'] ?>">

                          <?php
                              if($_SESSION['status']==1){
                                ?>
                                <button class="bg-success my-3 text-white px-3">Voted</button>
                                <?php
                              } else {
                                ?>
                                <button class="bg-danger my-4 text-white px-3" type="submit">Vote</button>
                            <?php
                              }
                          ?>
                       </form>
                       <hr>
                <?php
                     }
                 } else {
                    ?>
                    <div class="container">
                        <p>No groups to display</p>
                    </div>
                    <?php
                 }
              ?>
            <!--groups-->
           </div>
           <div class="col-md-5">
               <!--User Profile-->
               <img src="../uploads/<?php echo $data['photo'] ?>" alt="User Image">
               <br>
               <br>
               <strong class="text-dark h5">Name:</strong>
               <?php echo $data['username']; ?><br><br>
               <strong class="text-dark h5">Mobile:</strong>
               <?php echo $data['mobile']; ?><br><br>
               <strong class="text-dark h5">Status:</strong>
               <?php echo $status; ?><br><br>
           </div>
        </div>
    </div>
 <!-- script js -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>