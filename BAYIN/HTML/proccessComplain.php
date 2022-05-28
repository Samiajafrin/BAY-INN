<?php
// Start the session
session_start();
// echo "username = ".$_SESSION["username"];
// echo "phone_number = ".$_SESSION["phonenumber"];

//echo "topic name = ".$_POST['subject']."<br>";
//echo "message = ".$_POST['complain'];

//establishing connection
include_once "dbconnection.php";

$username = $_SESSION["username"];
$topic = $_POST['subject'];
$complain = $_POST['complain'];



//inserting values into database
$sql = "INSERT INTO complainbox (username,subject,complain)
VALUES ('$username', '$topic','$complain')";


if ($conn->query($sql) === TRUE) {
                
    //successfull Insert
    ?>
    <!-- php off then write other language then again php on -->
    
    <!-- going to login page-->

    <script>window.location.assign('complainSuccessPage.php')</script>

    <?php

} else {
//echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<br>failed to insert";
}

?>