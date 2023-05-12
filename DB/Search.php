<?php

include "db_conn.php";

if($_POST["search"]==""){
    echo "<h4>No results</h4>";
    echo "<h2><a href='../Room.php'>Return</a></h2>";
}

else{

    $search=trim($_POST["search"]);
    $query = $conn->prepare("SELECT * FROM booking_form WHERE userID like '%$search%'");
    while ($row -> mysql_fetch_assoc($query)) {
        echo "Hello";
    }
    if($count>0){ ?>
    
    <table>
    <tr>
        <th>Full Name</th>
        <th>User ID</th>
        <th>Email</th>
        <th>Date of Birth</th>
        <th>Mobile Number</th>
        <th>Nationality</th>
        <th>Gender</th>
        <th>Address</th>
        <th>College</th>
        <th>Room Type</th>
        <th>Room Number</th>
        <th>Check in Date</th>
        <th>Status</th>
    </tr>

    <?php
    foreach($control as $list){ ?>

    <tr>
        <th><?php echo $list->fname;?> <?php echo $list->lname;?></th>
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
        <th>Status</th>
    </tr>

    <?php }?>
    </table>

    <?php } else{
        echo "<h4>No results</h4>";
        echo "<h2><a href='../Room.php'>Return</a></h2>";
    }

}