<?php

include "../DB\db_conn.php";
session_start();
$user_id = $_SESSION['id'];

if(isset($_POST['update_profile'])){

    $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
    $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
    $update_address = mysqli_real_escape_string($conn, $_POST['update_address']);
 
    mysqli_query($conn, "UPDATE am_aacounts SET amName = '$update_name', amEmail = '$update_email', amAddress = '$update_address' WHERE id = '$user_id'") or die('query failed');
      
    echo '<script>alert("Information Updated Successfully");</script>';

}
 

 




if(isset($_SESSION['id']) && isset($_SESSION['amID'])){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['amName']; ?> Dashboard</title>
    <link rel="stylesheet" href="./sylesheet.css">
</head>
<body>



<?php
      $select = mysqli_query($conn, "SELECT * FROM am_aacounts WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $_SESSION = mysqli_fetch_assoc($select);
      }
   ?>

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<div class="wrapper">
    <div class="sidebar">
         
        <a href="./index.html"> <h2>PROFILE </h2> </a>
        <ul>
            
            <li><a href="./application.html"><i class="Appication"></i>Appication</a></li>
            <li><a href="./records.html"><i class="Records"></i>Reccords</a></li>
            <li><a href="../DB/logout.php"><i class="Appication"></i>Log out</a></li>

        </ul> 
    </div>
    <div class="main_content">
        <div class="header"><?php echo $_SESSION['amName']; ?> Dashboard </div>  
        

<div class="wrapper" style="background-image: url('tech.jpg');">
    <div class="inner">
    <div class="image-holder">
    <img src="./imgs/sajid.jpg  " alt="image">
    </div>

    <form action="" method="post" enctype="multipart/form-data">
    <h3>Manager Profile</h3>
    <div class="form-group">
        
    <input type="text" name="update_name" value="<?php echo $_SESSION['amName']; ?>" class="form-control">
    </div>
    <div class="form-wrapper">
    <input type="text" name="update_email" value="<?php echo $_SESSION['amEmail']; ?>" class="form-control">
     
    </div>
    <div class="form-wrapper">
    <input type="text" value="<?php echo $_SESSION['amID']; ?>" readonly class="form-control">
    </div>

    <div class="form-wrapper">
        <input type="text" name="update_address" value="<?php echo $_SESSION['amAddress']; ?>"  class="form-control">
         
    </div>
    <div class="form-wrapper">
    <select name="" id="" class="form-control">
    <option value="<?php echo $_SESSION['amGender']; ?>"  selected><?php echo $_SESSION['amGender']; ?></option>
    </select>
    </div>



    <input type="submit" value="Edit" name="update_profile" class="edit">
     
    </button>
    </form>
    </div>
    </div>



    </div>
</div>


</body>
</html>


<?php
}else{
    header('Location: ../Sign-in Page AM.php');
    exit();
}

?>