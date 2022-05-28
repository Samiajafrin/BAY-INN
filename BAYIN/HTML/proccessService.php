<?php
// Start the session
session_start();
//echo "username = ".$_SESSION["username"];


//establishing connection
include_once "dbconnection.php";

$username = $_SESSION["username"];
$type = $_POST['type'];
$service_details = $_POST['service'];
$status ="need service";
$staff="not assigned";

//inserting values into database
$sql = "INSERT INTO service (username,type,details,status,staff_name)
VALUES ('$username', '$type','$service_details','$status','$staff')";


if ($conn->query($sql) === TRUE) {
                
    //successfull Insert
    ?>
    <!-- php off then write other language then again php on -->
    
    <!-- going to login page-->

    <script>window.location.assign('serviceSuccessPage.php')</script>

    <?php

} else {
//echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<br>failed to insert";
}

?>