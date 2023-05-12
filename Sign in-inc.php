<?php 
session_start();
include "DB\db_conn.php";

if(isset($_POST['ID']) && isset($_POST['Password'])){

    function Validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $ID = Validate($_POST['ID']);
    $Password = Validate($_POST['Password']);

    if(empty($ID)){
        header('Location: Sign-in Page.php?error=Enter User ID');
        exit();
    }
    else if(empty($Password)){
        header('Location: Sign-in Page.php?error=Enter Password');
        exit();
    }
    else{
        $sql = "SELECT * FROM accounts WHERE userID = '$ID' AND userPwd = '$Password'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)===1){
            $row = mysqli_fetch_assoc($result);
            if($row['userID']==$ID && $row['userPwd']==$Password){
                $_SESSION['userID'] = $row['userID'];
                $_SESSION['userName'] = $row['userName'];
                $_SESSION['userLname'] = $row['userLname'];
                $_SESSION['userEmail'] = $row['userEmail'];
                $_SESSION['fname'] = $row['fname'];
                $_SESSION['userPwd'] = $row['userPwd'];
                $_SESSION['id'] = $row['id'];
                header('Location: Home Page.php');
                exit();

            }
            else{
                header('Location: Sign-in Page.php?error=Incorrect Information');
                exit();
            }
        }
        else{
            header('Location: Sign-in Page.php?error=Incorrect Information');
            exit();
        }
    }
}

else{
    header('Location: Sign-in Page.php');
    exit();
}