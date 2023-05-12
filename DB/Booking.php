<?php
session_start();
include "db_conn.php";

if(isset($_POST['submit1'])){
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = date('Y-m-d', strtotime($_POST['dob']));
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $nationality = $_POST['nationality'];
    $ID = $_POST['ID'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $college = $_POST['college'];
    $rooms = $_POST['rooms'];
    $cinDate = date('Y-m-d', strtotime($_POST['cinDate']));
    


    // $select = "SELECT * FROM booking_form WHERE userID = '$ID'";
    // $select2 = "SELECT userID FROM accounts";
    // $result2 = mysqli_query($conn, $select2);
    // $result = mysqli_query($conn, $select);
    // if(mysqli_num_rows($result2) === mysqli_num_rows($result)){

    //     echo 'HELLOMAN';

    // }

    // else{
    //     echo 'NOOOOO';
    // }


    $book = "INSERT INTO booking_form (fname, lname, dob, email, mobileNo, nationality, userID, gender, address, college, roomType, chekInDate, status) VALUES ('$fname','$lname','$dob','$email', '$phone', '$nationality', '$ID', '$gender', '$address', '$college', '$rooms', '$cinDate', 'pending')";
    mysqli_query($conn, $book);
    echo '<script type="text/javascript">';
    echo 'alert("Your Form is pending waiting for approval");';
    echo 'window.location.href = "../Accommodation Page.php"';
    echo '</script>';

}