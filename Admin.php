<?php 
include 'DB/db_conn.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <style>
        table, th, td {
  border:1px solid black;
}
    </style>
</head>
<body>

<h1>Booking Form</h1>

<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>User ID</th>
        <th>Date of Birth</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Nationality</th>
        <th>Gender</th>
        <th>Address</th>
        <th>College</th>
        <th>Room Type</th>
        <th>Room Number</th>
        <th>Check in Date</th>
        <th>Action</th>
    </tr>
    

    <?php


    $query = "SELECT * FROM booking_form WHERE status = 'pending' ORDER BY id ASC";
    $result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($result)){

    

    ?>
    <tr>
        <td><?php echo $row['fname']; ?></td>
        <td><?php echo $row['lname']; ?></td>
        <td><?php echo $row['userID']; ?></td>
        <td><?php echo $row['dob']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['mobileNo']; ?></td>
        <td><?php echo $row['nationality']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['college']; ?></td>
        <td><?php echo $row['roomType']; ?></td>
        <td><?php echo $row['roomNo']; ?></td>
        <td><?php echo $row['chekInDate']; ?></td>
        <td>
            <form action="Admin.php" method ="POST">
                <input type="hidden" name="id1" value=" <?php echo $row['id']; ?>"/>
                <input type="submit" name="approve" value="Approve"/>
                <input type="submit" name="deny" value="Deny"/>
                <input type="number" name="rN" placeholder="Room Number">
            </form>

        </td>

    </tr>
</table>
    
<?php
    }
    ?>

<?php

if(isset($_POST['approve'])){
    $id = $_POST['id1'];
    $rN = $_POST['rN'];

    $select = "UPDATE booking_form SET status = 'Approved' ,roomNo = '$rN' WHERE id ='$id'";
    $result = mysqli_query($conn, $select);

    echo '<script type="text/javascript">';
    echo 'alert("Approved and added room number");';
    echo 'window.location.href = "Admin.php"';
    echo '</script>';

}


if(isset($_POST['deny'])){
    $id = $_POST['id1'];

    $select = "UPDATE booking_form SET status = 'deny' WHERE id ='$id'";
    $result = mysqli_query($conn, $select);

    echo '<script type="text/javascript">';
    echo 'alert("Approved and added room number");';
    echo 'window.location.href = "Admin.php"';
    echo '</script>';

}

?>
</body>
</html>