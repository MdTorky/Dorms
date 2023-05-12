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
        header('Location: Sign-in Page AM.php?error=Enter User ID');
        exit();
    }
    else if(empty($Password)){
        header('Location: Sign-in Page AM.php?error=Enter Password');
        exit();
    }
    else{
        $sql = "SELECT * FROM am_aacounts WHERE amID = '$ID' AND amPwd = '$Password'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)===1){
            $row = mysqli_fetch_assoc($result);
            if($row['amID']==$ID && $row['amPwd']==$Password){
                $_SESSION['amID'] = $row['amID'];
                $_SESSION['amName'] = $row['amName'];
                $_SESSION['amEmail'] = $row['amEmail'];
                $_SESSION['amPwd'] = $row['amPwd'];
                $_SESSION['amGender'] = $row['amGender'];
                $_SESSION['amAddress'] = $row['amAddress'];
                $_SESSION['amImage'] = $row['amImage'];
                $_SESSION['id'] = $row['id'];
                header('Location: Accommodation Manager/index.php');
                exit();

            }
            else{
                header('Location: Sign-in Page AM.php?error=Incorrect Information');
                exit();
            }
        }
        else{
            header('Location: Sign-in Page AM.php?error=Incorrect Information');
            exit();
        }
    }
}

else{
    header('Location: Sign-in Page AM.php');
    exit();
}