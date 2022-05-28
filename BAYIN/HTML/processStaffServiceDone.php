<?php
// Start the session
session_start();

// echo "usename".$_SESSION["username"];

// echo "sercice id = ".$_GET['serviceId'];

$servieID = $_GET['serviceId'];
$name = $_SESSION["username"];
//establishing connection
include_once "dbconnection.php";

$sql = "UPDATE service
SET status='service given'
WHERE id = $servieID";

if ($conn->query($sql) === TRUE) {

    $sql = "UPDATE staff
    SET status='available'
    WHERE username = '$name'";

    if ($conn->query($sql) === TRUE) {

        echo "<h1>successfull respond of staff</h1>";

    }else{
        echo "<br>Unsuccessful Cancel";
    }



}else{
    echo "<br>Unsuccessful Cancel";
}


?>